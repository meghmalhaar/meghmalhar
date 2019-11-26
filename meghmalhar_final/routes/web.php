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
    return view('home');
});

//admin group

Route::group(['middleware' => 'is.admin'], function () {
    Route::get('/user/{data}', 'UserController@getData');
    Route::post('/user/{data}', 'UserController@postData');
});

// home route

Route::get('/home','HomeController@index')->name('home');

Route::get('/product', 'ProductsController@index')->name('product');
Route::get('/mens_product', 'ProductsController@mens_product');
Route::get('/festive', 'HomeController@festive');
Route::get('/gown', 'HomeController@gown');
Route::get('/season_trend', 'HomeController@season_trend');

Route::get('cart', 'ProductsController@cart')->name('cart');

Route::get('add-to-cart/{id}', 'ProductsController@addToCart');

Route::patch('update-cart', 'ProductsController@update');

Route::delete('remove-from-cart', 'ProductsController@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/insertCart', 'ProductsController@insertCart')->name('insertCart');

Route::get('/product_item/{id}','ProductsController@product');
Route::post('/searchSize','ProductsController@searchSize')->name('searchSize');
Route::post('/searchMaterial','ProductsController@searchMaterial')->name('searchMaterial');
Route::post('/priceLth','ShortBy@priceLth')->name('priceLth');
Route::post('/priceHtl','ShortBy@priceHtl')->name('priceHtl');
Route::post('/category','ShortBy@category')->name('category');
Route::post('/price','ShortBy@price')->name('price');
Route::post('/searchColor','ShortBy@searchColor')->name('searchColor');

//for only enter detail in database
Route::get('/admin','Admin@index')->name('admin');
//