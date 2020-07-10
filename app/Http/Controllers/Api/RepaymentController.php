<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Thirdparty\Flutterwave;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon as Carbon;
use Validator;

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
        $userId = $userDetails->id;
     	$fname = $userDetails->firstName;
        $lname = $userDetails->lastName;
        $email = $userDetails->email;
        $phone = $userDetails->phone;
        $txRef = strtoupper(md5(Str::random(15)));
        $cust_name = $fname . ' ' . $lname;
        if ($amount_paid === "0.00" AND $planID === null AND $plan === null) {
        	$data = array("name" => "FundMyLaptop Repayment Plan for {$cust_name}", "amount" => $amount, "interval" => "monthly", "duration" => $repayments_left);
        	///Create a subscription plan for the dude
        	$res = json_decode($flutter->createPaymentPlan($data), true);
        	
        	if ($res['status'] === 'success') {
        		$planID = $res['data']['id'];
        		///update the info in the repayments table
	        	$update = \App\Repayment::query()->where('request_id',$request->id)->update([
	               'subscription_plan_id'=> $planID,
	               'subscription_plan'=> "FundMyLaptop Repayment Plan for {$cust_name}",
	            ]);
        	}
        }
        $data = array(
        	"PBFPubKey"=> config('flutterwave.public_key'),
  			"cardno"=> "4556052704172643",
  			"cvv"=>"899",
  			"expirymonth"=> "01",
  			"expiryyear"=> "21",
  			"currency"=> "NGN",
		  	"country"=> "NG",
        	'payment_plan' => $planID,
	        'amount' => $amount,
	        'email' => $email,
	        'phonenumber' => $phone,
	        'firstname' => $fname,
	        'lastname' => $lname,
	        "IP" => "69.123.8.9",
	        "txRef" => 'FML-'.$txRef,
	        "meta"=> array(
		      array("metaname"=> "FMLRequestID", "metavalue"=> $request->id)
		    ),
	        "redirect_url"=> "http://127.0.0.1/process-recurring-payments",
  			"device_fingerprint"=> "69e6b7f0b72037aa8428b70fbe03986c"
        );
        $endpoint = 'charge';
        //3) Initiate repayment on Fundee Account
        $paymentResponse = $flutter->sendRequest(json_encode($data),$endpoint);
        //4) Process Response and :
        $result = json_decode($paymentResponse, true);
        //if suggested_auth returns pin, add pin and suggested_auth to your payload again, re-encrypt
        if($result['data']['suggested_auth'] === 'PIN'){
        	///these have to be changed to real values
		    $data['pin'] = '3310';//fetch card real details
		    $data["suggested_auth"] = "PIN";
		}
		if($result['data']['suggested_auth'] === 'NOAUTH_INTERNATIONAL' ||
		$result['data']['suggested_auth'] === 'AVS_VBVSECURECODE'){
			///these have to be changed to real values
		  $data['suggested_auth'] = 'AVS_VBVSECURECODE/NOAUTH_INTERNATIONAL';
		  $data['billingzip'] = '07205';
		  $data['billingcity'] = 'Hillside';
		  $data['billingaddress'] = '470 Mundet PI';
		  $data['billingstate'] = 'NJ';
		  $data['billingcountry'] = 'US';
		}
		$response = $flutter->sendRequest(json_encode($data),$endpoint);
		$response = json_decode($response, true);
        //a) Update Accruals/Repayments/Transactions table
        //Assuming a sharing formula of 70-30 on the interest (which is 20% of requested amount)
        $rate = 0.2 * 0.3;
        $accrualAmount = $amount * $rate;
        $repaysleft = $repayments_left - 1;
        $amount = $response['data']['amount'];
        $code = $response['data']['chargeResponseCode'];
        $paymentDate = Carbon::parse($response['data']['createdAt'])->format('Y-m-d H:i:s');
        $status = $response['data']['status'];
	    DB::table('accruals')->insert(['request_id' => $request->id, 'rate' => $rate, 'amount' => $accrualAmount]);
	    DB::table('repayments')->where('request_id',$request->id)->update(['amount_paid' =>$amount, 'num_repayments_left' => $repaysleft, 'last_payment_date'=> $paymentDate]);
	    DB::table('transactions')->insert(['request_id' => $request->id, 'transaction_ref' => $txRef, 'amount' => $amount, 'response_code' => $code, 'status' => $status, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

        return response()->json(['status' => 'Repayment processed successfully'], 200);
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
