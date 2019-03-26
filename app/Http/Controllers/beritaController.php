<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model 
use App\Berita;
use App\Kategori;

class beritaController extends Controller
{
    public function index()
	{
		//mengambil data berita
		$berita = Berita::get();
		
		//mengirim data berita ke view berita
		return view ('berita',['berita' => $berita]);
}
public function tambah()
{
	return view('berita_tambah');
}
 public function store(Request $request)
    {
    	 $this->validate($request,[
	   'name' => 'required|min:5|max:25',
	   'tanggal' => 'required',
	   'penulis' => 'required|min:5|max:25',
	   'isi' => 'required|min:5|max:150'
    ]);
 
        Berita::create([
    		'name' => $request->name,
    		'tanggal' => $request->tanggal,
    		'penulis' => $request->penulis,
			'isi' => $request->isi
    	]);
 
    	return redirect('/berita');
    }
	public function edit($id_berita)
{
		
   $berita = Berita::find($id_berita);
   return view('berita_edit', ['berita' => $berita]);

 
}
public function update($id_berita, Request $request)
{
    $this->validate($request,[
	   'name' => 'required|min:5|max:25',
	   'tanggal' => 'required',
	   'penulis' => 'required|min:5|max:25',
	   'isi' => 'required|min:5|max:150'
    ]);
 
    $berita = Berita::find($id_berita);
    $berita->name = $request->name;
    $berita->tanggal = $request->tanggal;
	 $berita->penulis = $request->penulis;
	  $berita->isi = $request->isi;
    $berita->save();
	
    return redirect('/berita');
}
public function delete($id_berita)
{
    $berita = Berita::find($id_berita);
    $berita-> delete();
    return redirect('/berita');
}
public function pivot (Request $request){
	$berita = new berita;
	$berita -> name= "sandiophie";
	$berita -> tanggal ="2019-02-21";
	$berita -> penulis ="jedar";
	$berita -> isi ="menuju surga firdaus";
	
	$berita ->save();
	$kategori = kategori::find([1,2]);
	
			$berita->kategori()->attach($kategori);
			
			return 'anda beruntung';
		}
		}