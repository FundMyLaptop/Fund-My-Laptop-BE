<?php

use Illuminate\Http\Request;
header('Access-Control-Allow-Origin: *');
header( 'Access-Control-Allow-Headers: Authorization, Content-Type' );
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

// Authentication
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['namespace' => 'Api', 'middleware' => 'auth:api',  'prefix' => 'v1'], function (){
	/*Route::get('/user', function (Request $request) {
    	return $request->user();
	});*/
<<<<<<< HEAD
	Route::get('recommendations','RecommendationController@index');
    ///all other routes should be defined under this line using the format of line 25 (above)

    Route::post('requests','RequestController@store');
=======
    Route::get('recommendations','RecommendationController@index');
    Route::get('user-details', 'UserController@getUserDetails');
	///all other routes should be defined under this line using the format of line 25 (above)
>>>>>>> 211e8e921c9b78891ffe19a52927d07bb998b93b
});

<<<<<<< HEAD
Route::fallback(function(){
    return response()->json(['message' => 'Not Found'], 404);
})->name('api.fallback.404');

=======
Route::post('v1/request', 'RequestsController@insert');

Route::post('v1/order', 'RequestsController@create');
>>>>>>> Fixes #7

