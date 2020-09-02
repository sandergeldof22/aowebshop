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

Route::get('/shop', [
	'uses' => 'ShopController@index',
	'as' => 'shop.index'	
]);

Route::get('/shop/{id}', [
	'uses' => 'ShopController@details',
	'as' => 'shop.details'
]);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
Route::get('/shop/', [
	'uses' => 'ShopController@filter',
	'as' => 'shop.filter'
]);
Route::post('/shop/', [
	'uses' => 'ShopController@filter',
	'as' => 'shop.filter'
]);
}

Route::post('/updateCart/{id}', [
	'uses' => 'ProductController@updateCart',
	'as' => 'product.updateCart'
]);

Route::get('/addToCart/{id}', [
	'uses' => 'ProductController@addToCart',
	'as' => 'product.addToCart'
]);

Route::get('/shoppingcart', [
	'uses' => 'ProductController@getShoppingCart',
	'as' => 'product.shoppingCart'
]);

Route::get('/login', function() {
	return view('login');
});


// Route::get('/shoppingcart', [
// 	'uses' => 'ShoppingcartController@index',
// 	'as' => 'shoppingcart.index'
// ]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


