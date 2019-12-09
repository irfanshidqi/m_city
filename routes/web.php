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

Route::get('/', 'HomeController@index');

Route::post('/data-menu', 'HomeController@fetch_menu')->name('menu.fetch');
Route::get('/data-lain', 'HomeController@fetch_more')->name('lain.fetch');
