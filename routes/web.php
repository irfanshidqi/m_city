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
Route::get('/produk-hukum/', 'HukumController@index');
Route::get('/santunan-warga/', 'SantunanController@index');
Route::get('/ppid/', 'PPIDController@index');

Route::get('/ipm', 'IpmController@index');
Route::get('/inflasi', 'InflasiController@index');
Route::get('/pe', 'PeController@index');
Route::get('/ntp', 'NtpController@index');
Route::get('/ntpsub', 'NtpsubController@index');

Route::get('/agenda/', 'AgendaController@index');
Route::get('/tv-temanggung/', 'TvController@index');
Route::get('/data-agenda', 'AgendaController@event')->name('event.fetch');
Route::post('/data-harga', 'HomeController@harga_pokok')->name('harga.fetch');
Route::get('/menu-det/{id}', 'MenuDetController@index');

Route::post('/data-menu', 'HomeController@fetch_menu')->name('menu.fetch');
Route::post('/detail-data-menu', 'HomeController@fetch_detailMenu')->name('detailmenu.fetch');
Route::post('/data-content', 'HomeController@fetch_content')->name('content.fetch');
Route::post('/data-gallery', 'HomeController@fetch_gallery')->name('gallery.fetch');
Route::get('/data-lain', 'HomeController@fetch_more')->name('lain.fetch');
Route::post('/test', 'HomeController@test')->name('test.fetch');
