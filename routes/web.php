<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@landingPage');
Route::get('/signup-success', 'PagesController@SuccessPage');

Auth::routes(['verify' => true]);


Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/{provider}/update-profile', 'SocialController@callback');
//Route::get('/api/v1/fundeeverification/{id}','FundeeVerificationController@userVerified')->name('fundee-verification-status');

//Route::get('/redirect', 'SocialAuthGoogleController@redirect');
//Route::get('/callback', 'SocialAuthGoogleController@callback');
Route::get('/testify/{testimonial_id}', 'testifyController@delete');
Route::get('campaigns', 'RequestController@investeeCampaigns');
Route::get('campaigns/create', 'RequestController@createCampaign'); //
Route::post('campaigns', 'RequestController@storeCampaign');
Route::get('campaigns/edit/{id}', 'RequestController@editCampaign');
Route::get('campaigns/manage/{id}', 'RequestController@showCampaign');
Route::patch('campaigns/{id}', 'RequestController@updateCampaign');
Route::post('campaigns/{id}', 'RequestController@suspendCampaign');
Route::get('/featured-request', 'RequestController@fetch_featured_requests');
Route::get('invest/redirect/{id}/{user}', 'InvestController@redirect')->name('redirect');
Route::POST('invest/redirect/{id}/{user}', 'InvestController@redirect')->name('redirect');
Route::get('terms-and-conditions', 'PagesController@termsAndConditions');
Route::get('privacy-policy', 'PagesController@privacyPolicy');
Route::get('campaign', 'PagesController@campaign');
Route::get('campaign/{id}', 'RequestController@show');
Route::get('career', 'PagesController@career');
Route::get('album', 'PagesController@album');
Route::get('faq', 'PagesController@faq');
Route::get('about', 'PagesController@about');
Route::get('update-profile', 'PagesController@profile');
/* Route::get('payment', 'PagesController@payment'); */
//make payment for a request... where {id} is requestId

Route::get('payment/{id}', 'PagesController@payment');
Route::post('payment/{id}', 'PagesController@payment');
Route::get('benefit', 'PagesController@benefit');
Route::get('partners', 'PagesController@partners');
Route::get('how-it-works', 'PagesController@howItWorks');
Route::get('milestones', 'PagesController@mileStones');
Route::get('blog/{id}', 'PagesController@blogRead');
Route::get('blog', 'PagesController@blog')->name('blog');
Route::get('error404Page', 'PagesController@error404Page');
Route::get('error500Page', 'PagesController@error500Page');
Route::get('investor-dashboard', 'PagesController@investorDashboard');
Route::get('investee-dashboard', 'PagesController@investeeDashboard')->middleware('verified');;
Route::get('campaign-grossing', 'PagesController@campaignGrossing');
Route::get('complaint', 'PagesController@complaint');
Route::get('complaint-form', 'PagesController@complaintForm');
Route::post('complaint-form', 'PagesController@complaintForm');

//contact routes
Route::get('contact', 'PagesController@contact');

Route::post('process_contact', 'ContactController@store');



Route::get('lend', 'PagesController@lend');

Route::get('blog-list', 'PagesController@blogList');
// this points to the badly rendered blade
Route::get('signup', 'PagesController@signUp');
//signup route
Route::post('signup', 'UserController@signUp');
Route::get('total-investment', 'PagesController@totalInvestment');
Route::get('test-modals', 'PagesController@testModals');

//login post route
Route::get('/login', 'PagesController@login');
Route::post('login', 'UserController@login')->name('login');
//verify account route
Route::get('verify/{id}', 'UserController@verifyAccount');
Route::get('sign-up', 'PagesController@sign_up');
Route::post('/{provider}/update-profile/{id}','UserController@update')->name('update-profile');
Route::get('edit-profile/{id}','UserController@edit');
Route::post('update-profile/{id}', 'UserController@update')->name('update-profile');
Route::get('edit-profile/{id}', 'UserController@edit');
Route::get('unfunded-campaigns', 'RequestController@availableFundingRequest');

Route::post('transaction/store/{user}', 'TransactionController@store');

//paystack api
Route::post('campaign/pay', 'InvestController@redirectToGateway')->name('campaign/pay');
Route::get('campaign/pay/callback', 'InvestController@handleGatewayCallback');


