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

Route::get('/testing', function() {return 'work';});
Route::get('/testing3', function(){return 'work';});
Route::resource('/item', 'itemController');
Route::resource('/category', 'CategoryController');
Route::resource('/order', 'OrderController');
Route::resource('/customer', 'CustomerController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
