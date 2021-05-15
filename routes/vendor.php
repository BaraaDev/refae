<?php


Route::prefix('vendor')->name('vendor.')->middleware(['auth', 'verified', 'Agency'])->group(function() {


        Route::get('dashboard', 'MainController@dashboard')->name('dashboard');

        Route::get('profile','MainController@profile')->name("profile.index");

        Route::post('/profile_post','MainController@profile_post')->name("profile.profile_post");

        // Properties

        Route::get('property/index','ManagePropertyController@manageProperty')->name('property.index');

        Route::get('property/create','ManagePropertyController@createProperty')->name('property.create');

        Route::match(['get'],'/create','ManagePropertyController@createProperty')->name('property.create');

        Route::get('property/edit/{id}','ManagePropertyController@editProperty')->name('property.edit');

        Route::match(['get','post'],'/del/{id}','ManagePropertyController@deleteProperty')->name('property.delete');

        Route::post('property/update/{id}','ManagePropertyController@update')->name('property.update');

        Route::post('property/store','ManagePropertyController@store')->name('property.stores');



        // WishList


        Route::post('/wishlist','UserWishListController@handleWishList')->name("wishList.handle");

        Route::get('/wishlist','UserWishListController@index')->name("wishList.index");

        Route::get('/wishlist/remove','UserWishListController@remove')->name("wishList.remove");


        //
        // Route::get('agencyagent/{id}', 'AgentController@edit')->name('agencyagent');

        Route::resource('agencyagent', 'AgentController');

        Route::get('review', 'ReviewController@index')->name('review.index');

        Route::get('review/{id}', 'ReviewController@approve')->name('review.approve');

        Route::DELETE('deletereview/{id}', 'ReviewController@deletereview')->name('deletereview');


        });



