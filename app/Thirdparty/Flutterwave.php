<?php

namespace App\ThirdParty;

class Flutterwave 
{
	private $key;
	private $public;
	private $secret;
	private $app_mode;
	private $serviceURL;

	public function __construct()
	{
		$this->app_mode	= config('flutterwave.app_mode');

		if ($this->app_mode === 'live') {
			$this->serviceURL = 'https://api.ravepay.co/flwv3-pug/getpaidx/api';//config('flutterwave.live_base_url');
			$this->key = config('flutterwave.encryption_key');
			$this->public = config('flutterwave.public_key');
			$this->secret = config('flutterwave.secret_key');
		}elseif($this->app_mode === 'testing') {
			$this->serviceURL = config('flutterwave.test_base_url');
			$this->key = config('flutterwave.encryption_key');
			$this->public = config('flutterwave.public_key');
			$this->secret = config('flutterwave.secret_key');
		}
		
	}

	public function sendRequest($data, $endpoint)
    {
    	//encrypt data
    	$url = $this->serviceURL . '/' . $endpoint;
    	$encryptedData = $this->encrypt($data, $this->key);
  		$data = array("PBFPubKey" => $this->public,"client" => $encryptedData,"alg" => "3DES-24");
        //send request to payment processor
        $headers =  array("Content-type: application/json");
        $result = $this->curl(json_encode($data),$url, $headers);
        return $result;
    }
  
  	public function createPaymentPlan($data)
  	{
  		$url = 'https://api.flutterwave.com/v3/payment-plans';
  		$headers =  array("Authorization: Bearer {$this->secret}");
        $result = $this->curl($data,$url, $headers);
        return $result;
  	}

  	private function encrypt($data, $key)
   	{
    	$encData = openssl_encrypt($data, 'DES-EDE3', $key, OPENSSL_RAW_DATA);
        return base64_encode($encData);
   	}

   	public function curl($postdata, $url, $headers)
   	{
   		$ch = curl_init();
   		curl_setopt($ch, CURLOPT_URL, "{$url}");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata); //Post Fields
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
		curl_setopt($ch, CURLOPT_TIMEOUT, 200);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		return $result;
   	}
   	
}