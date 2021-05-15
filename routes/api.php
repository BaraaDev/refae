<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('configs','BookingController@getConfigs')->name('api.get_configs');
Route::get('{type}/search','SearchController@search')->name('api.search2');
Route::get('{type}/detail/{id}','SearchController@detail')->name('api.detail');

Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {

    Route::post('login', 'Api\AuthController@login');
    Route::post('register', 'Api\AuthController@register');
    Route::post('logout', 'Api\AuthController@logout');
    Route::post('refresh', 'Api\AuthController@refresh');
    Route::post('me', 'Api\AuthController@me');
    // Route::get('wish', 'Api\UserController@wish');

});


Route::post('wish', 'Api\ApiController@wish');

Route::post('addwish', 'Api\ApiController@addwish');

Route::group(['prefix' => 'user'], function ($router) {

    Route::get('booking-history', 'UserController@getBookingHistory');


});


Route::get('properties', 'Api\ApiController@allproperty');

Route::get('featured', 'Api\ApiController@featured');

Route::get('category', 'Api\ApiController@category');

Route::get('property/{slug}', 'Api\ApiController@singleproperty');

Route::get('news', 'Api\ApiController@news');

Route::get('news/{slug}', 'Api\ApiController@singlenews');

Route::get('locations', 'Api\ApiController@locations');

Route::get('location/{id}', 'Api\ApiController@location');

Route::get('buy', 'Api\ApiController@buy');

Route::get('rent', 'Api\ApiController@rent');

Route::get('agencies', 'Api\ApiController@agencies');

Route::get('agency/{slug}', 'Api\ApiController@agency');

Route::post('/review','Api\ApiController@addReview')->name('review.store');

Route::post('/propertyreview','Api\ApiController@propertyreview')->name('propertyreview');

