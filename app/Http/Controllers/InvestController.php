<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\sendAcknowledgementEmail;
use App\Request as FundRequest;
use App\User;
use Paystack;
use App\Transaction;
use Illuminate\Support\Facades\Auth;
use Validator;
use Redirect;
class InvestController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Invest Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling investment requests
    | , redirecting to payment page and handling returns from payment page
    | It collects amount to be invested and amount requested and compares them
    | then proceeds appropriately
    */

    /**
     * Handles comparison of Amounts*
     * @param Request $request
     */
    

    public function index(Request $request)
    {
        //
    }

    public function redirectToGateway(Request $request)
    {
        //dd($request->amount);
        $rules = array(
            'amount'      => 'required',
            'fullName'      => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        if (!$validator->fails()) {
            $request->amount = $request->amount * 100;
            return Paystack::getAuthorizationUrl()->redirectNow();
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback(Transaction $trans)
    {
        $paymentDetails = Paystack::getPaymentData();

        //dd($paymentDetails);
        $user = Auth::user();

        $trans->request_id       = $paymentDetails['data']['metadata']['request_id'];
        $trans->user_id     = $paymentDetails['data']['metadata']['funder_id'];
        $trans->transaction_ref    = $paymentDetails['data']['reference'];
        $trans->status      = $paymentDetails['data']['status'];
        $trans->amount      = ($paymentDetails['data']['amount'])/100;
        $trans->response_code       = 200;
        $saved = $trans->save();

        if($saved){
        $request = FundRequest::where('id', $trans->request_id)->with('user')->first();
            $details = [
                'greeting' => 'Hi ' . $user->firstName,
                'body' => 'Your investment of ' . $trans->amount . ' in '. $request->user->firstName . '\'s campaign - ' . url('/campaign/'.$trans->request_id). ' - has been acknowledged',
                'thanks' => 'Thank you.!',
            ];
            //$sendUser = User::first();

            $user->notify(new sendAcknowledgementEmail($details));

            return redirect()->route('investor-dashboard');
        }
        // else{
        //     dd('Not saved');
        
        // }

    }


    /**
     * Handle successfull or failed transactions
     *
     * @param $request_id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function redirect($request_id,$user_id, Request $request)
    {


        if (isset($request['cancelled'])) {

            return view('transaction-status')->with('message','Transaction Cancelled !');
        }


        if ($request->query('txref')) {
            
            $ref = $request->query('txref');
            $amount = FundRequest::find($request_id)['amount'];
            $currency = "NGN";

            $query = array(
                "SECKEY" => "FLWSECK_TEST-64a553127109b16a7164cc9ba03859ec-X",
                "txref" => $ref
            );

            $data_string = json_encode($query);

            $ch = curl_init('https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/verify ');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

            $response = curl_exec($ch);


            curl_close($ch);

            $resp = json_decode($response, true);

            $paymentStatus = $resp['data']['status'];
            $chargeResponsecode = $resp['data']['chargecode'];
            $chargeAmount = $resp['data']['amount'];
            $chargeCurrency = $resp['data']['currency'];

            $query = array(
                
                "request_id" => $request_id,
                "transaction_ref" => $ref,
                "amount" => $chargeAmount,
                "status" => 'success',
                "response_code" => intval($chargeResponsecode)

            );

            $data_string = json_encode($query);
            if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeCurrency == $currency)) {
                $store = curl_init(url('transaction/store/'.$user_id));
                curl_setopt($store, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($store, CURLOPT_POSTFIELDS, $data_string);
                curl_setopt($store, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($store, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($store, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                $response = curl_exec($store);
                curl_close($store);
                if(json_decode($response,1)['message']=='transaction record created')
                return view('transaction-status')->with('message','Transaction successful !');
                else{
                    return view('transaction-status')->with('message','Transaction recording failed !');
                }
            } else {
                return view('transaction-status')->with('message','Transaction failed !');
            }
        }

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
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
