<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//use App\Berita;
//use App\Kategori;

class dashboardController extends Controller
{
    public function index()
	{
		return view('dashboard');
}
		
}