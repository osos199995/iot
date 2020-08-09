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

Auth::routes();

Route::get('/home', 'HomeController@show')->name('home');
Route::get('/settings', 'SettingsController@index')->name('settings');
Route::get('pump1/{id}/{status}', 'SettingsController@updatefirstpump');

Route::get('pump2/{id}/{status}', 'SettingsController@updatesecoundpump');

Route::post('measuerments','Meassurements@store')->name('measuerments');