<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ConsultantsServiceRepository;

class ConsultantsController extends Controller
{
    public function indicadoresFuncionales()
    {

        $gestionDevelopers = new ConsultantsServiceRepository;
        $usersBacklogs = $gestionDevelopers->getBacklogsYear(1); // AREA Consultoria
        $backlogs = $gestionDevelopers->getBacklogs();  // TODOS 
        
        // Verificar si el backlog esta calificado
        $usuarios = $gestionDevelopers->getUsers(1); // AREA Consultoria
          //print_r($a[0]); // datos backlog actual
    
       //print_r($a[1]); // promedio backlog actual
      // print_r($a[2]); // datos backlog anterior
      // print_r($a[3]); // promedio backlog anterior
        // CABECERA DATOS COMPARATIVOS ENTRE BACKLOGS
       
        $data = $gestionDevelopers->promedioBacklogActual(1); // id area . Consultoria id 1
        $promedioGlobal = $gestionDevelopers->promedioGlobal(1);

        $promediosArray = [];
        $promediosArrayAnteriorback = [];

        // backlogs actuales
        for ($i=0 ; $i < count($backlogs)  ; $i++ ) { 
            $BacklogID_Promedio = $gestionDevelopers->promedios($backlogs[$i]->ss_backlog_id, 1); // $idBacklog, idArea CONSULTORIA === 1
            array_push($promediosArray, $BacklogID_Promedio);
          //  $backlogsAnterioresPromedio = $gestionDevelopers->promedioBacklogAnterior($backlogs[$i]->ss_backlog_id,date("Y") - 1, 1); // idArea Consultoria
         //   array_push($promediosArrayAnteriorback, $backlogsAnterioresPromedio);
         }   
          
         
        return view('indicadoresFuncionales', compact('usersBacklogs', 'backlogs','usuarios','promediosArray', 'promediosArrayAnteriorback',  'data', 'promedioGlobal'));
    

    }
        //return view('index', compact('factor', 'indicator', 'mes', 'mes_anterior_name', 'mes_actual', 'mes_anterior', 'variacion', 'valor', 'base_total', 'proporcionla_data', 'valor_interpretacion', 'data_chart'));
}
