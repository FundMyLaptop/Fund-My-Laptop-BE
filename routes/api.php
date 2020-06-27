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

Route::group(['namespace' => 'Api', 'prefix' => 'v1'], function (){
	/*Route::get('/user', function (Request $request) {
    	return $request->user();
	});*/
	Route::get('recommendations','RecommendationController@index');
	///all other routes should be defined under this line using the format of line 25 (above)

	Route::delete('users/{id}','AdminController@destroy');
});

Route::fallback(function(){
    return response()->json(['message' => 'Not Found'], 404);
})->name('api.fallback.404');
