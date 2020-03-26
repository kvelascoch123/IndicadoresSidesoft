<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeadersController extends Controller
{ 
    public function showPageGestionHeaders(){
        $areas = $this->getAreas();
        return view('headers', compact('areas'));
    }

    public function getAreas(){
        $areas = DB::table('ss_area') //USUARIOS REGISTRADOS --no del sistema
       ->get();

        return $areas;
    }
}
