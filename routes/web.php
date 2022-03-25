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


Route::group(['middleware' => ['auth']], function(){
    Route::get('/','ThingController@index')->middleware('auth');
    Route::get('/things/category/{category}','ThingController@list');
    Route::get('/things/create','ThingController@create');
    Route::get('/things/{thing}','ThingController@show');
    Route::get('/saving','ThingController@possession');
    
    Route::post('/things','ThingController@store1');
    
    
    Route::get('/things/{thing}/edit','ThingController@edit');
    Route::put('/things/{thing}', 'ThingController@update');
    
    Route::delete('/things/{thing}', 'ThingController@delete');
    
    Route::post('category','ThingController@store3');
    
    Route::get('/saving/p_create','ThingController@p_create');
    Route::post('/saving','ThingController@store2');
    Route::get('/saving/p_edit','ThingController@p_edit');
    Route::put('/saving/{saving}','ThingController@update2');
});
    Auth::routes();
    
    Route::get('/home', 'HomeController@index')->name('home');
