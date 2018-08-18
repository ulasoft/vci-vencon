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

Route::get('/', 'Site\IndexCtrl@index')->middleware('lang');

Route::group(['prefix' => '{lang}'],function() {

    Route::prefix('/')->group(function(){
        Route::get('/', 'Site\IndexCtrl@index');
        Route::get('hotels','Site\HotelsCtrl@index')->name('hotels');
        Route::get('restaurants','Site\RestaurantsCtrl@index')->name('restaurants');
        Route::get('entertainments','Site\EntertainmentsCtrl@index')->name('entertainments');
        Route::prefix('regions')->group(function(){
           Route::get('/','Site\RegionsCtrl@index')->name('regions');
           Route::get('/{slug}','Site\RegionsCtrl@view')->name('regions_view');
        });
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
            Route::get('/add','Dashboard\RestaurantsCtrl@add')->name('add_res');
            Route::post('/add','Dashboard\RestaurantsCtrl@create');
            Route::get('edit/{id}','Dashboard\RestaurantsCtrl@edit')->name('edit_res');
            Route::post('edit/{id}','Dashboard\RestaurantsCtrl@update')->name('update_res');
            Route::get('delete/{id}','Dashboard\RestaurantsCtrl@delete')->name('delete_res');
        });

        Route::prefix('distinctions')->group(function(){
            Route::get('/','Dashboard\DistinctionsCtrl@index')->name('dis_d');
            Route::get('/add','Dashboard\DistinctionsCtrl@add')->name('add_dis');
            Route::post('/add','Dashboard\DistinctionsCtrl@create');
            Route::get('edit/{id}','Dashboard\DistinctionsCtrl@edit')->name('edit_dis');
            Route::post('edit/{id}','Dashboard\DistinctionsCtrl@update')->name('update_dis');
            Route::get('delete/{id}','Dashboard\DistinctionsCtrl@delete')->name('delete_dis');
        });

        Route::prefix('settings')->group(function(){
            Route::get('/','Dashboard\SettingsCtrl@index')->name('settings');
            Route::post('/add','Dashboard\SettingsCtrl@update');

        });
    });

});