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
Route::get('/product/list', 'ProductController@list')->name('product.list');
//Route::get('/product/edit', 'ProductController@edit')->name('product.edit');
Route::resource('/product', 'ProductController');
Route::post('/product/create', 'ProductController@insert')->name('product.insert');
Route::post('/product/{name}/edit', 'ProductController@update');
Route::get('/product/{name}/delete', 'ProductController@delete');