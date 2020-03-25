<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SuportServiceRepository;

class SupportController extends Controller
{

    public function indicadoresSoporte(){ 

        $gestionDevelopers = new SuportServiceRepository;
        $usersBacklogs = $gestionDevelopers->getBacklogsYear(3); // AREA TECNICA
        $backlogs = $gestionDevelopers->getBacklogs();  // TODOS 
        // Verificar si el backlog esta calificado
        $usuarios = $gestionDevelopers->getUsers(3); // AREA TECNICA
        $promediosArray = [];
        $promediosArrayAnteriorback = [];
        $data = $gestionDevelopers->promedioBacklogActual(3); // id area . Consultoria id 1
        $promedioGlobal = $gestionDevelopers->promedioGlobal(3);

    
        // backlogs actuales 
        for ($i=0 ; $i < count($backlogs)  ; $i++ ) { 
            $BacklogID_Promedio = $gestionDevelopers->promedios($backlogs[$i]->ss_backlog_id, 3); //idBacklog, idArea Area TECNICA == 2 
            array_push($promediosArray, $BacklogID_Promedio);
            $backlogsAnterioresPromedio = $gestionDevelopers->promedioBacklogAnterior($backlogs[$i]->ss_backlog_id,date("Y") - 1, 3); // Id Area Tecnica
            array_push($promediosArrayAnteriorback, $backlogsAnterioresPromedio);
         }    
          
        return view('indicadoresSoporte', compact('usersBacklogs', 'backlogs','usuarios','promediosArray', 'promediosArrayAnteriorback','data', 'promedioGlobal'));
    }    
}
