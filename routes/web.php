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

Route::group(['prefix' => '/toolpass'], function () {
    Route::get('/test', function(){
        return('its work');
    });
    //    Route::post('/create', ''); => Auth::id()->request('login', pass, others)
    //    Route::put('/update','');
    //    Route::delete('/delete','');
    //    localhost/toolpass/create ->
});
