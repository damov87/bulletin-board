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

Auth::routes();

Route::get('/', 'AdvertisementController@index')->name('main');
Route::get('/home', 'AdvertisementController@index')->name('home');

Route::resource('advertisements', 'AdvertisementController');
Route::resource('users', 'UserController')->middleware('user.cabinet');

Route::get('/user_cabinet/{user}', 'UserController@cabinet')->name('cabinet')->middleware('auth');
