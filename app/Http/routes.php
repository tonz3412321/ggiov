<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'YourCreditAllianceController@index'
]);


Route::get('/privacy', [
    'as' => 'privacy',
    'uses' => 'YourCreditAllianceController@privacy'
]);
Route::get('/services', [
    'as' => 'services',
    'uses' => 'YourCreditAllianceController@services'
]);


Route::get('/testimonials', [
    'as' => 'testimonials',
    'uses' => 'YourCreditAllianceController@testimonials'
]);

Route::get('/faq', [
    'as' => 'faq',
    'uses' => 'YourCreditAllianceController@faq'
]);

Route::get('/prices', [
    'as' => 'prices',
    'uses' => 'YourCreditAllianceController@prices'
]);

Route::get('/guarantee', [
    'as' => 'guarantee',
    'uses' => 'YourCreditAllianceController@guarantee'
]);

Route::get('/education', [
    'as' => 'education',
    'uses' => 'YourCreditAllianceController@education'
]);

Route::get('/terms-and-condition', [
    'as' => 'terms.and.conditions',
    'uses' => 'YourCreditAllianceController@termsandcondtions'
]);

Route::get('/affiliate', [
    'as' => 'affiliate',
    'uses' => 'YourCreditAllianceController@affiliate'
]);

Route::get('/contact-us', [
    'as' => 'contactus',
    'uses' => 'YourCreditAllianceController@contactus'
]);







Route::group(['middleware' => ['web']], function () {


    Route::get('/testimonials', [
        'as' => 'testimonials',
        'uses' => 'Testimonials@index'
    ]);

    Route::post('/testimonials', [
        'as' => 'post.testimonials',
        'uses' => 'Testimonials@store'
    ]);


    Route::get('/signup-as-page', ['uses' => 'SignupAsPageController@index', 'as' => 'signup-as-page']);
    Route::post('/signup-as-page', ['uses' => 'SignupAsPageController@validatePromotionCode']);

    Route::get('/signup-as-page/personal-info', ['uses' => 'SignupAsPageController@personalInfo' , 'as' => 'personal-info-page']);
    Route::post('/signup-as-page/personal-info', ['uses' => 'SignupAsPageController@postPersonalInfo']);

    Route::get('/signup-as-page/billing-and-legal', ['uses' => 'SignupAsPageController@billingAndLegal' , 'as' => 'billing-and-legal-page']);
    Route::post('/signup-as-page/billing-and-legal', ['uses' => 'SignupAsPageController@postBillingAndLegal']);

    Route::get('/signup-as-page/congratulations', ['uses' => 'SignupAsPageController@congratulations' , 'as' => 'congratulations-page']);

    Route::post('/signup-as-page/check-promotion-code', ['uses' => 'SignupAsPageController@checkPromotionCode' , 'as' => 'check-promotion-code-ajax']);

});
