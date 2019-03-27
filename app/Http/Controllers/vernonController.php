<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Berita;
use App\Kategori;

class vernonController extends Controller
{
    public function beranda(){
	return view ('beranda')
	}
	public function berita(){
	return view ('berita')
	}
	 public function login(){
	return view ('login')
	}
		 public function welcome(){
	return view ('welcome')
	}
	public function kategori(){
	return view ('kategori')
	}
	
}