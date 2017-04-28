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
Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/registration', 'HomeController@registration');

Route::get('/home', 'HomeController@home');

Route::get('/service/{service_id}', 'ToolPassController@show');

Route::group(['prefix' => '/toolpass'], function () {

    Route::post('/create', 'ToolPassController@create');

    Route::put('/update', 'ToolPassController@update');

    Route::delete('/delete', 'ToolPassController@delete');

});
