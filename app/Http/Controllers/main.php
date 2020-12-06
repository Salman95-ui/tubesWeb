<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main extends Controller
{
    //
    public function utama(){
    	return view('utama') ;
    }

    public function buat(){
    	return view('buat') ;
    }

    public function detail(){
    	return view('detail');
    }
    
}
