<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Thirdparty\Flutterwave;
use Illuminate\Support\Str;

class RepaymentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Work on re-occuring payment of debit from the
     * fundee account and storing FML interest in the accrual table
     * Author - @Segun (segunibidokun@gmail.com)
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function process(Request $request)
    {
    	$flutter = new Flutterwave();
    	if (isset($request->id)) {

        //1) Ensure the user role is Admin
        if (!\Auth::user()->role == 'user') {
            return response()->json(['error'=>'You are not authorized to view this endpoint'],403);
        }
        //2) Fetch Fundee repayment/request details for user with incomplete payments
        $data = \App\Request::where('id', $request->id)->with('repayment')->with('user')->get();
        foreach ($data as $dataObj) {
        	$planDetails = $dataObj->repayment;
        	$userDetails = $dataObj->user;
        }
        foreach ($planDetails as $detail) {
        	$planID = $detail->subscription_plan_id;
        	$plan = $detail->subscription_plan;
        	$amount = substr($detail->amount, 0, -3);
        	$amount_paid = $detail->amount_paid;
        	$repayments_left = $detail->num_repayments_left;
        }
     	$fname = $userDetails->firstName;
        $lname = $userDetails->lastName;
        $email = $userDetails->email;
        $phone = $userDetails->phone;
        $txRef = strtoupper(md5(Str::random(15)));
        $cust_name = $fname . ' ' . $lname;
        if ($amount_paid === "0.00") {
        	$data = array("amount" => $amount, "name" => "FundMyLaptop Repayment Plan for {$cust_name}", "interval" => "monthly", "duration" => $repayments_left);
        	///Create a subscription plan for the dude
        	$res = $flutter->createPaymentPlan($data);
        	//return json_encode($res);
        	///update the info in the repayments table
        }
        
        $data = array(
  			"cardno"=> "4556052704172643",
  			"cvv"=>"899",
  			"expirymonth"=> "01",
  			"expiryyear"=> "21",
        	'payment_plan' => "13",
	        'amount' => $amount,
	        'firstname' => $fname,
	        'lastname' => $lname,
	        'email' => $email,
	        'phonenumber' => $phone,
	        "txRef" => 'FML-'.$txRef,
	        "ip" => "69.123.8.9",
	        "redirect_url"=> "http://127.0.0.1/process-recurring-payments",
  			"device_fingerprint"=> "69e6b7f0b72037aa8428b70fbe03986c"
        );
        $endpoint = 'payments';
        //3) Initiate repayment on Fundee Account
        $paymentResponse = $flutter->sendRequest(json_encode($data),$endpoint);
        return json_encode($paymentResponse);
        //4) Process Response and ;
        $response = json_decode($paymentResponse, true);
        //return $response;
        //a) Update Accruals/Repayments/Transactions table
        //b) if num of repayments left = 0, suspend campaign on the requests table
       }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
