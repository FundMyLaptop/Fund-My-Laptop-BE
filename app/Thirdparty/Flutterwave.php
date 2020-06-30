<?php

namespace App\ThirdParty;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException as ConnectException;
use GuzzleHttp\Exception\ClientException as ClientException;
use GuzzleHttp\Exception\ServerException as ServerException;

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
			$this->serviceURL = config('flutterwave.live_base_url');
			$this->key = config('flutterwave.lencryption_key');
			$this->public = config('flutterwave.lpublic_key');
			$this->secret = config('flutterwave.lsecret_key');
		}elseif($this->app_mode === 'testing') {
			$this->serviceURL = config('flutterwave.test_base_url');
			$this->key = config('flutterwave.encryption_key');
			$this->public = config('flutterwave.public_key');
			$this->secret = config('flutterwave.secret_key');
		}
		
	}

	private function call($endpoint, $method = 'POST', $jsonData)
    {
   
        $headers = ['Authorization' => 'Bearer ' . $this->secret, 'content-type' => 'application/json'];
        $client = new Client(array(
                'base_uri' => $this->serviceURL,
                'headers' => $headers
            ));
        /*try{*/
                $response = $client->request(
                $method,
                $endpoint,
                ['json' => $jsonData]
            );

            return $response->getBody();
        }catch(ConnectException | ClientException | ServerException $e){
        	$err = get_class($e);
        	switch ($err) {
        		case "GuzzleHttp\Exception\ClientException":
        			return "Invalid verification code.";
        			break;

        		case "GuzzleHttp\Exception\ServerException":
                    return "An error has occured";
                    break;

                case "GuzzleHttp\Exception\ConnectException":
                    return "Error in connection to the service. Please try again.";
                    break;

        		default:
        			return "Some error occured";
        			break;
        	}
            
        }
        
    }


	public function sendRequest($data, $endpoint)
    {
    	//encrypt data
    	$encryptedData = $this->encrypt($data, $this->key);
  		$data = array("PBFPubKey" => $this->public,"client" => $encryptedData,"alg" => "3DES-24");
        //send request to payment processor
        return $this->call($endpoint, $method = 'POST', json_encode($data));
    }
  
  	public function createPaymentPlan($data)
  	{
  		$data["seckey"] = $this->secret;
  		$endpoint = 'payment-plans';
  		//encrypt data
    	//$encryptedData = $this->encrypt(json_encode($data), $this->key);
    	//send request to payment processor
        return $this->call($endpoint, $method = 'POST', json_encode($data));
  	}

  	private function encrypt($data, $key)
   	{
    	$encData = openssl_encrypt($data, 'DES-EDE3', $key, OPENSSL_RAW_DATA);
        return base64_encode($encData);
   	}

   	
}