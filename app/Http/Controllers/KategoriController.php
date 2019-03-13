<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class KategoriController extends Controller
{
    public function index(){
    	$var_kategori = Categories::all();
    	return view('kategori', compact('var_kategori'));
    	dd($var_kategori);
    }
}
