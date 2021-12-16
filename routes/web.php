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

Route::get('/layout', function () {
    return view('layout');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});


Route::get('/dosen','DosenController@index');
Route::get('/dosen/add_form', 'DosenController@add_form');
Route::post('/dosen/store','DosenController@store');
Route::get('/dosen/edit/{id}','DosenController@edit');
Route::post('/dosen/update','DosenController@update');
Route::get('/dosen/delete/{id}','DosenController@delete');

// route blog
Route::get('/blog', 'BlogController@index');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');