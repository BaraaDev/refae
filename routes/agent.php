<?php


Route::prefix('agent')->name('agent.')->middleware(['auth', 'verified', 'Agent'])->group(function() {


        Route::get('dashboard', 'MainController@dashboard')->name('dashboard');

        Route::get('profile','MainController@profile')->name("profile.index");

        Route::post('/profile_post','MainController@profile_post')->name("profile.profile_post");


        // WishList

        Route::post('/wishlist','UserWishListController@handleWishList')->name("wishList.handle");

        Route::get('/wishlist','UserWishListController@index')->name("wishList.index");

        Route::get('/wishlist/remove','UserWishListController@remove')->name("wishList.remove");



        });



