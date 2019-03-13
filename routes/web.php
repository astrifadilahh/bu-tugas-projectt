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

Route::get('kategori', function () {
    return "halaman_kategori";
});

Route::get('Layouts', function() {
	return view('Layouts.master');
});

Route::get('Dashboard', function() {
	return view('Dashboard/dashboard');
});

Route::get('Dashboard2', function() {
	return view('Dashboard.dashboard');
});

Route::resource('kategori','KategoriController')->except(['destroy']);