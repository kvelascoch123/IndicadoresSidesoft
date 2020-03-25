<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualificationsController extends Controller
{
    //SE DETALLAn LAS CALIFICACIONES MULTIPLES EN ESTA VISTA
    public function getPage($idArea){
        return $idArea; 
    }
}
