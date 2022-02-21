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


Route::get('/','ThingController@index');
Route::get('/things/category/{category}','ThingController@list');
Route::get('/things/{thing}','ThingController@show');
Route::get('/things/{things}/create','ThingController@create');
Route::get('/category/{category}/possession','ThingController@possession');

Route::post('category','ThingController@store');

