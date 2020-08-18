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



Route::get('/', 'PageController@index')->name('productList');
Route::get('/create', 'PageController@createProduct')->name('createProduct');
Route::post('/create', 'PageController@validateProduct')->name('validateProduct');
Route::get('/active', 'PageController@activeProduct')->name('activeProduct');
Route::get('/inactive', 'PageController@inActiveProduct')->name('inActiveProduct');
Route::get('/product/{id}', 'PageController@editProduct')->name('editProduct');
Route::post('/update', 'PageController@updateProduct')->name('updateProduct');
Route::get('/calculate', 'PageController@calculationProduct')->name('calculationProduct');




