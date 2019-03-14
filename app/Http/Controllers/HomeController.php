<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function tambah(){
        return view('create');
    }

    public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('categories')->insert([
		'id' => $request->inputid,
		'nama_kategori' => $request->inputkategori,
		'slug' => $request->inputslug,
		'tanggal' => $request->inputtgl
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/Create');
 
}
}
