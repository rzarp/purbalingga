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

// Route::get('/', function () {
//     return view('dashboard-master.dashboard');
// });

// dashboard index
Route::get('/dashboard','DashboardController@index')->name('home');
Route::get('/','DashboardController@dashboard')->name('index');
Route::get('/index/vismis','DashboardController@vismis')->name('vismis');
Route::get('/detail/berita/{id}','DashboardController@detail')->name('detail');
Route::get('/detail/favorit/{id}','DashboardController@favdetail')->name('favdetail');


// About
Route::get('/about/input','AboutController@inputabout')->name('input.about');
Route::get('/about/lihat','AboutController@lihatabout')->name('lihat.about');
Route::post('/about/tambah','AboutController@store')->name('about.store');
Route::get('/about/edit/{id}','AboutController@edit')->name('about.edit');
Route::put('/about/edit/{id}','AboutController@update')->name('about.update');
Route::delete('/about/hapus/{id}','AboutController@destroy')->name('about.destroy');

// favorit
Route::get('/favorit/input','FavoritController@index')->name('input.favorit');
Route::get('/favorit/lihat','FavoritController@lihatfavorit')->name('lihat.favorit');
Route::post('/favorit/tambah','FavoritController@store')->name('favorit.store');
Route::get('/favorit/edit/{id}','FavoritController@edit')->name('favorit.edit');
Route::put('/favorit/edit/{id}','FavoritController@update')->name('favorit.update');
Route::delete('/favorit/hapus/{id}','FavoritController@destroy')->name('favorit.destroy');

//berita
Route::get('/berita/input','BeritaController@index')->name('input.berita');
Route::get('/berita/lihat','BeritaController@lihatberita')->name('lihat.berita');
Route::post('/berita/tambah','BeritaController@store')->name('berita.store');
Route::get('/berita/edit/{id}','BeritaController@edit')->name('berita.edit');
Route::put('/berita/edit/{id}','BeritaController@update')->name('berita.update');
Route::delete('/berita/hapus/{id}','BeritaController@destroy')->name('berita.destroy');

//kesenian
Route::get('/kesenian/input','KesenianController@index')->name('input.kesenian');
Route::get('/kesenian/lihat','KesenianController@lihatkesenian')->name('lihat.kesenian');
Route::post('/kesenian/tambah','KesenianController@store')->name('kesenian.store');
Route::get('/kesenian/edit/{id}','KesenianController@edit')->name('kesenian.edit');
Route::put('/kesenian/edit/{id}','KesenianController@update')->name('kesenian.update');
Route::delete('/kesenian/hapus/{id}','KesenianController@destroy')->name('kesenian.destroy');

//Visi misi
Route::get('/vismis/input','VisiMisiController@index')->name('input.vismis');
Route::get('/vismis/lihat','VisiMisiController@lihatvismis')->name('lihat.vismis');
Route::post('/vismis/tambah','VisiMisiController@store')->name('vismis.store');
Route::get('/vismis/edit/{id}','VisiMisiController@edit')->name('vismis.edit');
Route::put('/vismis/edit/{id}','VisiMisiController@update')->name('vismis.update');
Route::delete('/vismis/hapus/{id}','VisiMisiController@destroy')->name('vismis.destroy');

Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

// Route::group(['middleware'=> 'is_admin'],function() {
// });

