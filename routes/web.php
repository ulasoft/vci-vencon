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

Route::group(['prefix' => '{lang}'],function() {

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index')->name('home');


    Route::group(['prefix' => 'dashboard', 'middleware' => 'admin'],function(){
        Route::get('/','Dashboard\IndexCtrl@index');
    });
});