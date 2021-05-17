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

});
