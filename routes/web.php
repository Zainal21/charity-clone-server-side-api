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

Route::group(['namespace' => 'Admin'], function(){
    Route::get('/','AuthController@login')->name('login');
    Route::post('/login','AuthController@process')->name('login');
    Route::get('/admin','DashboardController@index')->name('admin');
    // causes
    Route::get('/causes','CausesController@index');
    Route::get('/causes/create','CausesController@create');
    // user
    Route::resource('/users','UserController');
    
    // donation
    Route::get('/donations','DonationController@index');
    
});

