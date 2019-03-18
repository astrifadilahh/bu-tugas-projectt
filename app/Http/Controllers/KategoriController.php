<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categories;

class KategoriController extends Controller
{
    public function index(){
    	$var_kategori = Categories::all();
    	return view('kategori', compact('var_kategori'));
    	dd($var_kategori);
	}

	public function cari(Request $request){
		$cari = $request->get('q');
		$result = Categories::where('nama_kategori', 'LIKE', '%'.$cari.'%')->paginate(5);
		return view('result', compact('cari', 'result'));
	}

	public function addform(){
		return view('crud.insert');
	}

	public function store(Request $request){
		DB::table('categories')->insert([
            'nama_kategori' => $request->kategori,
            'slug' => $request->slug,
            'tanggal' => $request->tgl
          ]);

         return redirect('kategori');
	}

	public function destroy($id){
		DB::table('Categories')->where('id',$id)->delete();
		return redirect('kategori');
	}

	public function update(Request $request, $id){
		DB::table('categories')->where('id',$id)->update([
            'nama_kategori' => $request->kategori,
            'slug' => $request->slug,
            'tanggal' => $request->tgl
            ]);		
            return redirect('kategori');
	}

	public function editform($id){
        $data = DB::table('categoried')->where('id',$id)->get();
		return view('crud.edit', compact('data'));
    }
}
