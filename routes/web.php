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

Route::get('/', 'PublicController@index')->name('home');
Route::get('/publication/{slug}', 'PublicController@publication')->name('publication');
Route::get('/checkout/{slug}', 'PublicController@checkout')->name('checkout');
