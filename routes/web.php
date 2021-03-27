<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


//For login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('/home');


/*Route::get('/', function () {
    return view('akash');
});
*/

Route::get('/', 'PagesController@index')->name('/');


//Projects er Routes
Route::get('/products', 'ProductsController@index');
Route::get('/products.create', 'ProductsController@create');
Route::post('/products.store', 'ProductsController@store');
Route::get('/products.show.{id}','ProductsController@show');
Route::get('/products.edit.{id}','ProductsController@edit');
Route::post('/products.update.{id}', 'ProductsController@update');
Route::get('/products.delete.{id}','ProductsController@destroy');
Route::get('/products.search','ProductsController@search');
Route::get('/products.sort','ProductsController@sort');
