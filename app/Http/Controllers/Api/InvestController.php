<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Request as FundRequest;
// use Illuminate\Support\Facades\Auth;
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
     *  @param  Request $request
     * @return \Illuminate\Http\Response
     */
   
    public function index(Request $request)
    {
        $request_id=$request->query('request_id');
        $amount_invested=$request->query('amount_invested');
        $amount_requested=FundRequest::find($request_id)['amount'];
        //  $funder_email=Auth::user()->email;
        $funder_email='olayemi289@gmail.com';
    
       if($amount_invested==$amount_requested){
 $txref = uniqid('transaction');
$curl = curl_init();

$customer_email = $funder_email;
$amount = $amount_requested;  
$currency = "NGN";

 // ensure you generate unique references per transaction.
$PBFPubKey = "FLWPUBK_TEST-cc5d921b45a6eade343203276b926967-X"; 
$redirect_url = url('api/v1/invest/redirect/'.$request_id);


curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'customer_email'=>$customer_email,
    'currency'=>$currency,
    'txref'=>$txref,
    'PBFPubKey'=>$PBFPubKey,
    'redirect_url'=>$redirect_url
  ]),
  CURLOPT_HTTPHEADER => [
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the rave API
  return response()->json(['message' => $err], 404);
}

$transaction = json_decode($response);

if(!$transaction->data && !$transaction->data->link){
  // there was an error from the API
  return response()->json(['message' => 'There is an error from the API'], 400);
    }

// redirect to page so User can pay
return redirect($transaction->data->link);


       }else{
        return response()->json(['message' => "Amounts don't match"], 404);
       }
    }
    
   /**
     * Handle successfull or failed transactions
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function redirect($request_id,Request $request)
    {

        if(isset($request['cancelled'])){
            return response()->json(['message' => "Transaction was cancelled"], 400);
        }

            
        
        if ($request->query('txref')) {
            $ref =$request->query('txref');
            $amount = FundRequest::find($request_id)['amount']; 
            $currency = "NGN"; 
    
            $query = array(
                "SECKEY" => "FLWSECK_TEST-03a945bfd231d60cf50c2e4da3060898-X",
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
    
            $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $header = substr($response, 0, $header_size);
            $body = substr($response, $header_size);
    
            curl_close($ch);
    
            $resp = json_decode($response, true);
    
            $paymentStatus = $resp['data']['status'];
            $chargeResponsecode = $resp['data']['chargecode'];
            $chargeAmount = $resp['data']['amount'];
            $chargeCurrency = $resp['data']['currency'];
    
            if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
            return 'success';
            } else {
               return 'failure';
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
