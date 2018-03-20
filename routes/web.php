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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/allcustomers','CustomerController@allCustomers')->name('customer.all.json');
Route::post('/custonernew','CustomerController@addNewAjax')->name('customer.new.ajax');
Route::resource('brand', 'BrandController');
Route::resource('type', 'TypeController');
Route::resource('status', 'StatusController');
Route::resource('order', 'OrderController');
Route::resource('customer', 'CustomerController');
Route::post('order/search', 'OrderController@search');
Route::get('order/{uniqid}/pdf', 'OrderController@pdfDownload')->name('Zgłoszenie');
Route::get('order/{order}/status/{status}', 'OrderController@statusChange');
Route::get('adminparams', 'AdminparamsController@admin');
Route::get('customer/{id}/orders', 'CustomerController@customerOrsers')->name('Zgłoszenie');
