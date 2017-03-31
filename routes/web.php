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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'login'], function () {
    
    Route::get('google', [
        'uses' => 'Auth\LoginController@redirectToProvider'    
    ]);
    
    Route::get('google/callback', 'Auth\LoginController@handleProviderCallback');
    
    Route::get('twitter', [
        'uses' => 'Auth\LoginController@redirectToProvider'    
    ]);
    
    Route::get('twitter/callback', 'Auth\LoginController@handleProviderCallback');
    
    Route::get('github', [
        'uses' => 'Auth\LoginController@redirectToProvider'    
    ]);
    
    Route::get('github/callback', 'Auth\LoginController@handleProviderCallback');
});