<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

// Auth::routes(['verify' => true]);


Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');
//Route::get('/api/v1/fundeeverification/{id}','FundeeVerificationController@userVerified')->name('fundee-verification-status');

Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');
Route::get('/testify/{testimonial_id}', 'testifyController@delete');

//public routes
Route::get('/featured-request', 'RequestController@fetch_featured_requests');

Route::get('terms-and-conditions', 'PagesController@termsAndConditions');
Route::get('privacy-policy', 'PagesController@privacyPolicy');
Route::get('faq', 'PagesController@faq');
/* Route::get('payment', 'PagesController@payment'); */
//make payment for a request... where {id} is requestId
Route::get('payment/{id}', 'PagesController@payment');
Route::post('payment/{id}', 'PagesController@payment');
Route::get('benefit', 'PagesController@benefit');
Route::get('partners', 'PagesController@partners');
Route::get('how-it-works', 'PagesController@howItWorks');
Route::get('milestones', 'PagesController@mileStones');
Route::get('contact', 'PagesController@contact');
Route::get('blog-read', 'PagesController@blogRead');
Route::get('blog', 'PagesController@blog');
Route::get('blog-list', 'PagesController@blogList');

Route::get('campaign', 'PagesController@campaign')->middleware('auth');
Route::get('career', 'PagesController@career')->middleware('auth');
Route::get('album', 'PagesController@album')->middleware('auth');

Route::get('payment', 'PagesController@payment')->middleware('auth');




Route::get('investor-dashboard', 'PagesController@investorDashboard')->middleware('auth');
Route::get('investee-dashboard', 'PagesController@investeeDashboard')->middleware('auth');
Route::get('campaign-grossing', 'PagesController@campaignGrossing')->middleware('auth');

//users route
Route::get('complaint', 'PagesController@complaint')->middleware('auth');
Route::get('complaint-form', 'PagesController@complaintForm')->middleware('auth');
Route::get('profile-update', 'PagesController@updateProfile')->middleware('auth');


Route::get('total-investment', 'PagesController@totalInvestment')->middleware('auth');
Route::get('test-modals', 'PagesController@testModals')->middleware('auth');

Route::get('signup', 'PagesController@signUp');
Route::get('login', 'PagesController@login');
Route::get('sign-up', 'PagesController@sign_up');

Route::get('error404Page', 'PagesController@error404Page');
Route::get('error500Page', 'PagesController@error500Page');


Route::get('blog/{id}', 'PagesController@blogRead');
Route::get('blog', 'PagesController@blog')->name('blog');
Route::get('error404Page', 'PagesController@error404Page');
Route::get('error500Page', 'PagesController@error500Page');
Route::get('investor-dashboard', 'PagesController@investorDashboard');
Route::get('investee-dashboard', 'PagesController@investeeDashboard');
Route::get('campaign-grossing', 'PagesController@campaignGrossing');
Route::get('complaint', 'PagesController@complaint');
Route::get('complaint-form', 'PagesController@complaintForm');
Route::post('complaint-form', 'PagesController@complaintForm');

//contact
Route::get('contact', 'PagesController@contact');
Route::post('process_contact', 'ContactController@store');

Route::get('blog-list', 'PagesController@blogList');

//this points to the badly rendered blade

Route::get('signup', 'PagesController@signUp');
Route::get('total-investment', 'PagesController@totalInvestment');
Route::get('test-modals', 'PagesController@testModals');
Route::get('login', 'PagesController@login')->name('login');
Route::get('sign-up', 'PagesController@sign_up');
Route::post('update-profile/{id}','UserController@update')->name('update-profile');
Route::get('edit-profile/{id}','UserController@edit');
Route::get('unfunded-campaigns', 'RequestController@availableFundingRequest');
