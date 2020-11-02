<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'LandingPageController@index')->name('home');

Route::get('/order', 'OrderController@index')->name('order');

Route::get('/type/{id}', 'TypeController@index');

Route::get('/sections/{id}', 'SectionsController@viewSection');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
