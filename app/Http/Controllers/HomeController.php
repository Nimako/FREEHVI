<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class HomeController extends Controller
{

 
    public function index()
    {
    
        $tr = new GoogleTranslate('es', null); // Or simply do not pass the second parameter 

         return view('home');
    }


}
