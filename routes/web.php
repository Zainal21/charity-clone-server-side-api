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
    Route::post('/causes','CausesController@store');
    Route::get('/causes/edit/{id}','CausesController@edit');
    Route::put('/causes/update/{id}','CausesController@update');
    Route::delete('/causes/delete/{id}','CausesController@destroy');
    // user
    Route::get('/users','UserController@index')->name('users.index');
    Route::get('/users/create','UserController@create');
    Route::post('/users','UserController@store')->name('users.create');
    Route::get('/users/{id}','UserController@edit');
    Route::put('/users/update/{id}','UserController@update');
    Route::delete('/users/delete/{id}','UserController@destroy');
    
    // donation
    Route::get('/donations','DonationController@index');
    
});

