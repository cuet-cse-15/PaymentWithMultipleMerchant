<?php

//payment form
Route::get('/paypal', 'PaymentController@index');

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');

Auth::routes();

Route::get('/invoices', 'HomeController@Invoices')->name('invoices');
Route::get('/invoice/{id}', 'HomeController@SingleInvoice')->name('single-invoice');
Route::get('/invoice-print/{id}', 'HomeController@PrintInvoice')->name('print-invoice');
Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
