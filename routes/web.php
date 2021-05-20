<?php


    Route::get('tour/{id}', 'HomeController@tour')->name('tour');

    Route::get('match/{id}', 'HomeController@match')->name('match');

    Route::get('hotel/{id}', 'HomeController@hotel')->name('hotel');

    Route::post('addtocart', 'HomeController@addtocart')->name('addtocart');

    Route::get('cart', 'HomeController@cart')->name('cart');

    Route::get('/', 'HomeController@index');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('locations','HomeController@locations')->name('locations');

    Auth::routes();


   Route::get('user.profile.index','UserController@profile')->name('user.profile.index');


    Route::post('register','UserController@userRegister')->name('auth.register');

    Route::post('logout','UserController@logout')->name('auth.logout');


     Route::get('contact', function () {

       return view('contact');

     })->name('contact');

     Route::get('about', function () {

       return view('about');

     })->name('about');

      Route::match(['post'],'/contact/store','ContactController@store')->name("contact.store");

      Route::get('news','HomeController@news')->name('news');

      Route::get('blog/{id}','HomeController@blog')->name('blog');

      Route::get('hotels','HomeController@hotels')->name('hotels');
      Route::get('tours','HomeController@tours')->name('tours');
      Route::get('matches','HomeController@matches')->name('matches');

      Route::post('/doCheckout','PaymentController@doCheckout')->name('doCheckout')->middleware(['auth']);


      Route::get('paypal/checkout/{order}', 'PayPalController@getExpressCheckout')->name('paypal.checkout');
      Route::get('paypal/checkout-success/{order}', 'PayPalController@getExpressCheckoutSuccess')->name('paypal.success');
      Route::get('paypal/checkout-cancel', 'PayPalController@cancelPage')->name('paypal.cancel');
