<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $data['list'] = DB::table('packages')->get();

        return view('business_packages',$data);
    }
    

}
