<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller 
{
    
    public function strona($slug) {
            if ($slug == 'home') return view('pages/home');
            elseif($slug == 'info') return view('pages/info'); 
            elseif($slug == 'zadania') return view('pages/zadania');  
            elseif($slug == 'konsultacje') return view('pages/konsultacje');
        else abort(404);
    }
   
}



