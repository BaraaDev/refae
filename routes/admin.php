<?php
// Admin Route

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth','dashboard','UserStatus'])->group(function() {

     Route::get('/', 'AdminController@index')->name('home');
     //  Properties
    Route::group(['prefix'=>'hotel'],function (){
        Route::get('/','PropertyController@index')->name('hotel.index');
        Route::get('/create','PropertyController@create')->name('hotel.create');
        Route::get('/edit/{id}','PropertyController@edit')->name('hotel.edit');
        Route::post('/store/{id}','PropertyController@store')->name('hotel.store');
        Route::post('/bulkEdit','PropertyController@bulkEdit')->name('hotel.bulkEdit');
        Route::post('/bulkEdit','PropertyController@bulkEdit')->name('hotel.bulkEdit');
    });

    //tours
    Route::resource('tours', 'ToursController');
    Route::post('tours/bulkEdit','ToursController@bulkEdit')->name('tours.bulkEdit');
    Route::post('tours/bulkEdit','ToursController@bulkEdit')->name('tours.bulkEdit');


    //Matches
    Route::resource('matches', 'MatchesController');
    Route::post('matches/bulkEdit','MatchesController@bulkEdit')->name('matches.bulkEdit');
    Route::post('matches/bulkEdit','MatchesController@bulkEdit')->name('matches.bulkEdit');


    Route::resource('location', 'LocationController');

    // Users Routes

    Route::group(['prefix'=>'users'],function (){

        Route::get('/getForSelect2','UserController@getForSelect2')->name('getForSelect2');

        Route::get('/','UserController@index')->name('user.index');

        Route::get('/create','UserController@create')->name('user.create');
        Route::get('/edit/{id}','UserController@edit')->name('user.edit');
        Route::post('/store/{id}','UserController@store')->name('user.store');
        Route::post('/bulkEdit','UserController@bulkEdit')->name('user.bulkEdit');

        Route::get('/password/{id}','UserController@password')->name('user.password');
        Route::post('/change-pass/{id}','UserController@changepass')->name('user.change_pass');

    });

    Route::resource('orders', 'OrdersController');

});
