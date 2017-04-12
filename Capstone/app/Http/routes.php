<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Store;

View::composer('*', function($view)
{
    $stores = Store::all();
    $view->with('stores', $stores);
});
Route::get('*', function () {
    $stores = Store::all();
});

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/cart', 'CartController@index');

Route::get('/products', 'ProductsController@index');

Route::post('/cart/store', 'CartController@store');