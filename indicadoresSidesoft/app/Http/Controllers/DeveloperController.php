<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SsBacklogYear;
use App\Models\SsBacklog;
use App\Models\SsUser;
use App\Repositories\DeveloperServiceRepository;

class DeveloperController extends Controller
{
    public function indicadoresTecnicos(Request $request)

    {      
   /*     $usersBacklogsQualification = DB::table('ss_backlog_year')
        ->join('ss_user', 'ss_backlog_year.ss_user_id', '=', 'ss_user.ss_user_id')
        ->join('ss_backlog', 'ss_backlog_year.ss_backlog_id', '=', 'ss_backlog.ss_backlog_id')
        ->join('ss_area', 'ss_backlog_year.ss_area_id', '=', 'ss_area.ss_area_id')
        ->join('ss_year', 'ss_backlog_year.ss_year_id', '=', 'ss_year.ss_year_id')
        ->select('ss_backlog_year.*', 'ss_user.name', 'ss_backlog.name AS backlog', 'ss_year.name AS year')
        ->where('ss_year.name',date("Y") )// Unicamente detalla del 2020
        ->where('ss_area.ss_area_id',2)
        ->get();
        return $usersBacklogsQualification;
        die();

        foreach ($usersBacklogsQualification as $key => $value) {
            //return $key;
        }

        $arrayName = array('Kevin Velasco' => array(45,54,77),
                            'Luis Mosquera' => array(95,94,97) 
                            );

       // array_push($arrayName, $arrayName[0]['Nuevo']);                   
        return $arrayName;
        die();
    */
        $gestionDevelopers = new DeveloperServiceRepository;      
        $usersBacklogs = $gestionDevelopers->getBacklogsYear(2); // AREA TECNICA
        $backlogs = $gestionDevelopers->getBacklogs();  // TODOS 
        // Verificar si el backlog esta calificado
        $usuarios = $gestionDevelopers->getUsers(2); // AREA TECNICA
        $data = $gestionDevelopers->promedioBacklogActual(2); // id area Tecnica id 2
        $promedioGlobal = $gestionDevelopers->promedioGlobal(2);
        //$promedioGlobalAnterior = $gestionDevelopers->promedioGlobalAnterior(2);
       
        $promediosArray = [];
        $promediosArrayAnteriorback = [];


        // backlogs actuales 
        for ($i=0 ; $i < count($backlogs)  ; $i++ ) { 
            $BacklogID_Promedio = $gestionDevelopers->promedios($backlogs[$i]->ss_backlog_id, 2); //idBacklog, idArea Area TECNICA == 2 
            array_push($promediosArray, $BacklogID_Promedio);
       }    
       
       
        return view('indicadoresTecnicos', compact('usersBacklogs', 'backlogs','usuarios','promediosArray', 'promediosArrayAnteriorback', 'data', 'promedioGlobal'));
    }


}