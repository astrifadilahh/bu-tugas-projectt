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

//Route::get('kategori', function () {
//    return "halaman_kategori";
//});

Route::get('Layouts', function() {
	return view('Layouts.master');
});

Route::get('Dashboard', function() {
	return view('Dashboard/dashboard');
});

Route::get('Dashboard2', function() {
	return view('Dashboard.dashboard');
});

Route::get('Master', function() {
	return view('Layouts.master');
});

Route::get('App', function() {
	return view('Master.app');
});

Route::group(['middleware'=>['web']], function(){
	Route::resource('/kategori','KategoriController');
	Route::get('search','KategoriController@search');
});

Route::get('/search', 'KategoriController@cari')->name('post.cari');

//Route::resource('kategori','KategoriController')->except(['destroy']);
//Route::get('kategori','KategoriController@search');
//Route::get('kategori/paginate','KategoriController@paginate');
//Route::get('query', 'KategoriController@search');