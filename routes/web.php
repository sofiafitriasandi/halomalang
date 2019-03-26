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
    return view('beranda');
});

Route::get('/sofi', function () {
    return view('sofi');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/berita', 'beritaController@index')->name('berita');

Route::get('/berita/tambah', 'beritaController@tambah');

Route::post('/berita/store', 'beritaController@store');

Route::get('/berita/edit/{id_berita}', 'beritaController@edit');

Route::put('/berita/update/{id_berita}', 'beritaController@update');

Route::get('/berita/hapus/{id_berita}', 'beritaController@delete');

Route::get('/berita/pivot','beritaController@pivot');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
