<?php

use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Route;
Auth::routes(['verify' => true]);


    Route::prefix('user')->name('user.')->middleware(['auth', 'verified'])->group(function() {


    Route::get('/profile','UserController@profile')->name("profile.index");

    Route::post('/profile_post','UserController@profile_post')->name("profile.profile_post");

    Route::match(['get'],'/profile/change-password','UserController@changePassword')->name("change_password");
    Route::post('/profile/change-password-post','UserController@changePasswordPost')->name("change_password_post");
    Route::get('/booking-history','UserController@bookingHistory')->name("user.booking_history");


    Route::get('orders','UserController@orders')->name("orders");

    Route::group(['prefix'=>'/booking'],function(){
        Route::get('{code}/invoice','BookingController@bookingInvoice')->name('user.booking.invoice');
        Route::get('{code}/ticket','BookingController@ticket')->name('user.booking.ticket');
    });



});



