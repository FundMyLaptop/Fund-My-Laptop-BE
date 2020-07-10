<?php 

return [

	//testing or live
	'app_mode' => 'live',
	///test credentials
	'test_base_url'  => env('FLUTTERWAVE_TEST_URL'),
	'public_key'  => env('FLUTTERWAVE_TEST_PUBLIC_KEY'),
	'secret_key'  => env('FLUTTERWAVE_TEST_SECRET_KEY'),
	'encryption_key'  => env('FLUTTERWAVE_TEST_KEY'),
	///live credentials
	'live_base_url'  => env('FLUTTERWAVE_LIVE_URL'),
	'lpublic_key'  => env('FLUTTERWAVE_LIVE_PUBLIC_KEY'),
	'lsecret_key'  => env('FLUTTERWAVE_LIVE_SECRET_KEY'),
	'lencryption_key'  => env('FLUTTERWAVE_LIVE_KEY'),
];

?>