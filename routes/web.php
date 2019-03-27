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
Route::get('/Home', function () {
    return view('Home');
});



Route::get('/berita', 'beritaController@index')->name('berita');

Route::get('/berita/tambah', 'beritaController@tambah') ;

Route::post('/berita/store', 'beritaController@store');

Route::get('/berita/edit/{id_berita}', 'beritaController@edit');

Route::put('/berita/update/{id_berita}', 'beritaController@update');

Route::get('/berita/hapus/{id_berita}', 'beritaController@delete');

Route::get('/berita/pivot','beritaController@pivot');




Route::get('/kategori', 'kategoriController@index')->name('kategori');

Route::get('/kategori/tambah', 'kategoriController@tambah');

Route::post('/kategori/store', 'kategoriController@store');

Route::get('/kategori/edit/{id_kategori}', 'kategoriController@edit');

Route::put('/kategori/update/{id_kategori}', 'kategoriController@update');

Route::get('/kategori/hapus/{id_kategori}', 'kategoriController@delete');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
