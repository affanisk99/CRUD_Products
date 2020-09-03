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
//units
Route::get('units','unitsController@index');
Route::get('units/create','unitsController@create');
Route::post('units/store','unitsController@store');
Route::get('units/edit/{id}','unitsController@edit');
Route::post('units/update/{id}','unitsController@update');
Route::get('units/destroy/{id}','unitsController@destroy');
//brands
Route::get('brands','brandsController@index');
Route::get('brands/create','brandsController@create');
Route::post('brands/store','brandsController@store');
Route::get('brands/edit/{id}','brandsController@edit');
Route::post('brands/update/{id}','brandsController@update');
Route::get('brands/destroy/{id}','brandsController@destroy');
//products
Route::get('products','productsController@index');
Route::get('products/create','productsController@create');
Route::post('products/store','productsController@store');
Route::get('products/edit/{id}','productsController@edit');
Route::post('products/update/{id}','productsController@update');
Route::get('products/destroy/{id}','productsController@destroy');