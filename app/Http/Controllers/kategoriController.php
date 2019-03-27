<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Berita;
use App\Kategori;

class kategoriController extends Controller
{
     public function index()
	{
		//mengambil data kategori
		$kategori = Kategori::all();
		
		//mengirim data berita ke view kategori
		return view ('kategori',['kategori' => $kategori]);
}
public function tambah()
{
	return view('kategori_tambah');
}
 public function store(Request $request)
    {
    	 $this->validate($request,[
	   'nama' =>'required|min:5|max:30',
    ]);
 
        Kategori::create([
    		'nama' => $request->nama,
    	]);
 
    	return redirect('/kategori');
    }
	
	public function edit($id_kategori)
{		
   $kategori = Kategori::find($id_kategori);
   return view('kategori_edit', ['kategori' => $kategori]);
 
}
public function update ($id_kategori, Request $request)
{
	
    $this->validate($request,[
	   'nama' => 'required|min:5|max:150'
    ]);
 
    $kategori = Kategori::find($id_kategori);
    $kategori->nama = $request->nama;
    $kategori->save();
	
    return redirect('/kategori');
}
public function delete ($id_kategori)
{
	
    $kategori = Kategori::find($id_kategori);
	$kategori->delete();
    return redirect()->back();
}		
}