<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Authorization, Content-Type');
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

Route::post('login', 'Api\UserController@login');
Route::post('savecomment', 'Api\CommentsController@store');
Route::get('logout', 'Api\UserController@logout');
Route::post('register', 'Api\UserController@register');
Route::delete('request/delete/{id}', 'RequestController@destroy');
Route::delete('request/delete-my-request/{id}','RequestController@deleteMyRequest');
Route::group(['namespace' => 'Api', 'middleware' => 'auth:api',  'prefix' => 'v1'], function () {
	/*Route::get('/user', function (Request $request) {
    	return $request->user();
    });*/
 
	Route::post('testimonial','TestimonialController@store');
	Route::any('process-recurring-payments', 'RepaymentController@process');
  Route::post('comment', 'CommentsController@store');
  Route::get('deletecomment', 'CommentsController@destroy');
  Route::post('reply', 'ReplyController@store');
  Route::get('deletereply', 'ReplyController@destroy');
  
    ///all other routes should be defined under this line using the format of line 25 (above)

	///all other routes should be defined under this line using the format of line 25 (above)
  Route::post('recommendations', 'RecommendationController@store');
  Route::get('verified-users', 'VerificationController@index');
  Route::get('recommendations', 'RecommendationController@index');
  Route::get('my-profile', 'UserController@getMyProfile');
  Route::get('requests', 'RequestController@index');  // this is an admin role should be passed through is admin auth
  Route::get('unattended-requests', 'RequestController@availableFundingRequest');
  Route::post('requests/store', 'RequestController@store');
  Route::get('requests/{id}', 'RequestController@show');
  Route::get('uncompleted-requests', 'RequestController@fetch_uncompleted_requests'); //This is a protected route
  Route::post('bank-accounts', 'BankAccountController@create');
  Route::get('featured-requests/{id}', 'RequestController@set_featured');
  Route::get('all-featured-requests', 'RequestController@fetch_featured_requests');
  Route::get('view-details-of-campaign/{id}', 'RequestController@view_details_of_a_campaign');
  Route::delete('favorite/delete/{id}','FavoriteController@destroy');
  Route::delete('users/delete/{id}','AdminController@destroy');
  Route::get('transaction/funder/{id}', 'TransactionController@getFunderHistory');
  Route::post('transaction/store', 'TransactionController@store');
  Route::post('transaction/update/{id}','TransactionController@update');
  Route::post('verify-bvn', 'VerificationController@verifyBvn');
  Route::get('marked-requests-favorite/{userId}', 'FavoriteController@userFavoriteRequest'); //Fetching all requests marked as favorite route
  Route::post('invest', 'InvestController@index');
  Route::get('invest/redirect/{id}', 'InvestController@redirect');
  Route::get('users','UserController@index');
  Route::post('save-verification-file','VerificationController@store');
  Route::get('completed-requests', 'AdminController@index');
  Route::delete('testimonials/delete/{id}','TestimonialController@deleteTestimonial');
  Route::get('fetch-testimonials', 'TestimonialController@fetch');
  Route::get('testimonials/user/{id}','TestimonialController@userTestimonials');
  Route::get('testimonials/{id}','TestimonialController@myTestimonials');
  Route::post('users/block','AdminController@block');
  Route::get('top_campaigns', 'RequestController@top_campaigns');


    // Commented out by Eromosele
    //Route::post('transaction/store', 'TransactionController@store');
    //Route::post('transaction/update/{id}','TransactionController@update');

});
Route::post('/password/email', 'Api\ForgotPasswordController@sendResetLinkEmail'); //For sending email link
Route::post('/password/reset', 'Api\ResetPasswordController@reset');  //For resetting the password
Route::get('email/verify/{id}/{hash}', 'Api\VerifyEmailController@verify')->name('verification.verify'); //verify email
Route::get('email/resend', 'Api\VerifyEmailController@resend')->name('verification.resend'); //resend email
   
Route::fallback(function () {
	return response()->json(['message' => 'Not Found'], 404);
})->name('api.fallback.404');

Route::get('testimonials/all', 'TestimonialController@index');


//commentted by onifade the method index in this contoller has an error
//Route::get('completed-requests', 'AdminController@index');
