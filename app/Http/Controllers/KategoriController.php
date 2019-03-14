<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Http\Requests;

class KategoriController extends Controller
{
    public function index(){
    	$var_kategori = Categories::all();
    	return view('kategori', compact('var_kategori'));
    	dd($var_kategori);
	}

	/*public function search(Request $request){
		$search = $request->get('search');
		$kat = Categories::where('nama_kategori','LIKE','%'.$search.'%')->paginate(5);
		return view('kategori', compact('kat'));
	}*/

	public function cari(Request $request){
		$cari = $request->get('q');
		$result = Categories::where('nama_kategori', 'LIKE', '%'.$cari.'%')->paginate(5);
		return view('result', compact('cari', 'result'));
	}

	/*public function search(Request $request)
    {
        $query = $request->get('q');
        $hasil = Categories::where('nama_kategori', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('kategori', compact('hasil', 'query'));
    }*/
	
	/*public function search(Request $request){
		// menangkap data pencarian
		$search = $request->search;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$var_kategori = Categories::all('categories')
		->where('nama_kategori','like',"%".$search."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('kategori',['categories'=>$var_kategori]);
	}*/

	/*public function paginate(\Illuminate\Http\Request $request){
    $users = Categories::when($request->keyword, function ($query) use ($request) {
        $query->where('nama_kategori', 'like', "%{$request->keyword}%")
            ->orWhere('slug', 'like', "%{$request->keyword}%");
    })->get();
    return view('kategori', compact('categories'));
	}*/
}
