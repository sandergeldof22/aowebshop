<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/shop/', [
	'uses' => 'ShopController@index',
	'as' => 'shop.index'
]);
Route::post('/shop/', [
	'uses' => 'ShopController@index',
	'as' => 'shop.index'
]);

Route::get('/shop/{id}', [
	'uses' => 'ShopController@details',
	'as' => 'shop.details'
]);

Route::get('/addAndGetShoppingCart/{id}', [
	'uses' => 'ProductController@addAndGetShoppingCart',
	'as' => 'product.addAndGetShoppingCart'	
]);

Route::post('/updateCart/{id}', [
	'uses' => 'ShoppingcartController@updateCart',
	'as' => 'shoppingcart.updateCart'
]);

Route::get('/deleteFromCart/{id}', [
	'uses' => 'ShoppingcartController@deleteFromCart',
	'as' => 'shoppingcart.deleteFromCart'	
]);

Route::post('/saveOrder', [
	'uses' => 'ShopController@saveOrder',
	'as' => 'shop.saveOrder'		
]);

Route::post('/addToCart/{id}', [
	'uses' => 'ProductController@addToCart',
	'as' => 'product.addToCart'
]);

Route::get('/addToCart/{id}', [
	'uses' => 'ProductController@addToCart',
	'as' => 'product.addToCart'
]);

Route::get('/shoppingcart', [
	'uses' => 'ShoppingcartController@getShoppingCart',
	'as' => 'shoppingcart.shoppingCart'
]);

Route::get('/checkout', [
	'uses' => 'ShopController@toCheckOut',
	'as' => 'shop.checkOut'	
]);

Route::get('/orders/', [
	'uses' => 'OrderController@index',
	'as' => 'order.orders'
]);

Route::get('/orders/{id}', [
	'uses' => 'OrderController@deleteOrder',
	'as' => 'order.deleteOrder'
]);

Route::get('/login', function() {
	return view('login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


