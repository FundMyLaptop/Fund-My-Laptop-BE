<?php
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
Route::get('/featured-request', 'RequestController@fetch_featured_requests');

Route::get('terms-and-conditions', 'PagesController@termsAndConditions');
Route::get('privacy-policy', 'PagesController@privacyPolicy');
Route::get('campaign', 'PagesController@campaign');
Route::get('career', 'PagesController@career');
Route::get('album', 'PagesController@album');
Route::get('faq', 'PagesController@faq');
Route::get('payment', 'PagesController@payment');
Route::get('benefit', 'PagesController@benefit');
Route::get('partners', 'PagesController@partners');
Route::get('how-it-works', 'PagesController@howItWorks');
Route::get('milestones', 'PagesController@mileStones');
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
Route::get('contact', 'PagesController@contact');
Route::get('blog-list', 'PagesController@blogList');
// this points to the badly rendered blade
Route::get('signup', 'PagesController@signUp');
Route::get('total-investment', 'PagesController@totalInvestment');
Route::get('test-modals', 'PagesController@testModals');
Route::get('login', 'PagesController@login')->name('login');
Route::get('sign-up', 'PagesController@sign_up');
Route::post('update-profile/{id}','UserController@update')->name('update-profile');
Route::get('edit-profile/{id}','UserController@edit');
Route::get('unfunded-campaigns', 'RequestController@availableFundingRequest');
