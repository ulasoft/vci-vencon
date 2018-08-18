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
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index')->name('home');


    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::group(['prefix' => 'dashboard', 'middleware' => 'admin'],function(){
        Route::get('/','Dashboard\IndexCtrl@index')->name('dashboard');
        Route::prefix('regions')->group(function(){
            Route::get('/','Dashboard\RegionsCtrl@index')->name('regions_d');
            Route::get('add','Dashboard\RegionsCtrl@add')->name('add_regions');
            Route::post('create','Dashboard\RegionsCtrl@created')->name('create_regions');
            Route::get('edit/{id}','Dashboard\RegionsCtrl@edit')->name('edit_regions');
            Route::post('edit/{id}','Dashboard\RegionsCtrl@update')->name('update_regions');
            Route::get('delete/{id}','Dashboard\RegionsCtrl@delete')->name('delete_regions');
        });

        Route::prefix('hotels')->group(function(){
            Route::get('/','Dashboard\HotelsCtrl@index')->name('hotels_d');
            Route::get('/add','Dashboard\HotelsCtrl@add')->name('add_hotels');
            Route::post('/add','Dashboard\HotelsCtrl@create');
            Route::get('edit/{id}','Dashboard\HotelsCtrl@edit')->name('edit_hotels');
            Route::post('edit/{id}','Dashboard\HotelsCtrl@update')->name('update_hotels');
            Route::get('delete/{id}','Dashboard\HotelsCtrl@delete')->name('delete_hotels');
        });

        Route::prefix('restaurants')->group(function(){
            Route::get('/','Dashboard\RestaurantsCtrl@index')->name('res_d');
//            Route::get('/add','Dashboard\HotelsCtrl@add')->name('add_hotels');
//            Route::post('/add','Dashboard\HotelsCtrl@create');
//            Route::get('edit/{id}','Dashboard\HotelsCtrl@edit')->name('edit_hotels');
//            Route::post('edit/{id}','Dashboard\HotelsCtrl@update')->name('update_hotels');
//            Route::get('delete/{id}','Dashboard\HotelsCtrl@delete')->name('delete_hotels');
        });



    });





});