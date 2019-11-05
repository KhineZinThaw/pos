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
    return view('client.home');
});

Route::get('/categories',function() {
    return view('client.categories');
});
Route::get('/product-detail',function() {
    return view('client.product-detail');
});

Route::get('/cart',function() {
    return view('client.cart');
});

Route::get('/checkout',function() {
    return view('client.checkout');
});

Route::get('/comfirmation',function() {
    return view('client.comfirmation');
});

Route::get('/login',function() {
    return view('client.login');
});


Route::get('/contacts',function() {
    return view('client.contacts');
});


Route::get('/testing', function() {return 'work';});
Route::get('/testing3', function(){return 'work';});
Route::resource('/item', 'itemController');
Route::resource('/category', 'CategoryController');
Route::resource('/order', 'OrderController');
Route::resource('/customer', 'CustomerController');
Route::resource('/profile', 'ProfileController');

Route::get('admin-panel', function(){
    
    return view('admin.dashboard');
});
Route::get('admin-register', function(){
    return view('admin.register');
});
Route::get('admin-login', function(){
    return view('admin.login');
});


 
Route::get('add-to-cart/{id}', 'OrderController@addToCart');

Route::get('items', function () {
    $items = App\item::paginate(10);

    $items->withPath('custom/url');

    
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
