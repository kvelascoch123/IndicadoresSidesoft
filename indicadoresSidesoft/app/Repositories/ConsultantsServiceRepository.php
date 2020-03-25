<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\SsBacklogYear;
use App\Models\SsBacklog;
use App\Models\SsUser;
class ConsultantsServiceRepository {
  
    public function getBacklogsYear($id_area){
        $user = SsUser::find(1);
        if (!empty($user)) {
            $usersBacklogs = DB::table('ss_backlog_year')
            ->join('ss_user', 'ss_backlog_year.ss_user_id', '=', 'ss_user.ss_user_id')
            ->join('ss_backlog', 'ss_backlog_year.ss_backlog_id', '=', 'ss_backlog.ss_backlog_id')
            ->join('ss_area', 'ss_backlog_year.ss_area_id', '=', 'ss_area.ss_area_id')
            ->join('ss_year', 'ss_backlog_year.ss_year_id', '=', 'ss_year.ss_year_id')
            ->select('ss_backlog_year.*', 'ss_user.name', 'ss_backlog.name AS backlog', 'ss_year.name AS year')
            ->where('ss_year.name',date("Y") )// Unicamente detalla del 2020
            ->where('ss_area.ss_area_id',$id_area)
            ->get();
            return  $usersBacklogs;    
        }else{
            echo '<script language="javascript">alert("No existen usuarios registrados");</script>'; 
        }
        // cargar informacion de la Historico Calificación Tecnicos Sidesoft 
  
    }

    // DATA BACKLOGS
    public function getBacklogs(){
        $backlogs = SsBacklog::all();
        return $backlogs;
    }
    // Users
    public function getUsers($id_area){
        $users = SsUser::all()
        ->where('ss_area_id',$id_area); // qury
        $usuarios = [];// almacen
        foreach ($users as $key ) {
            array_push($usuarios,$key->name);
        }
        return $usuarios;
    }

     // PROMEDIOS 

     public function promedios($idBacklog,$idArea){ // POR BACKLOGS ACTUALES
        $anio = DB::table('ss_year') // SUMATOIRA cmapos backlogs
        ->where('name', date('Y'))->get();
       
        $backlogsYearSuma = DB::table('ss_backlog_year') // SUMATOIRA cmapos backlogs
        ->where('ss_backlog_id', $idBacklog)
        ->where('ss_year_id',$anio[0]->ss_year_id) 
        ->where('ss_backlog_year.ss_area_id',$idArea)
        ->sum('qualification'); 
 
        // cantidad de notas para el promedio
            $usersBacklogs = DB::table('ss_backlog_year') //relacion de backlogs calificados
            ->join('ss_backlog', 'ss_backlog_year.ss_backlog_id', '=', 'ss_backlog.ss_backlog_id')
            ->join('ss_year', 'ss_backlog_year.ss_year_id', '=', 'ss_year.ss_year_id')
            ->select('ss_backlog_year.ss_backlog_id')
            ->where('ss_backlog_year.ss_area_id',$idArea)
            ->where('ss_backlog_year.ss_backlog_id', $idBacklog)// Unicamente detalla del 2020
            ->first();
            $allBacklogs = $this->getBacklogs();
            $backlogs = [];
            array_push($backlogs, $allBacklogs[0]);
           
          
            for ($i=0; $i < count($backlogs); $i++) { 
                
                    if($backlogs[$i]->ss_backlog_id != null){
                        $backlogsCount =  DB::table('ss_backlog_year') // SUMATOIRA cmapos backlogs
                        ->where('ss_year_id',$anio[0]->ss_year_id)
                        ->where('ss_backlog_id',$idBacklog)
                        ->where('ss_backlog_year.ss_area_id',$idArea)// AREA DE CONSULTORIA
                        ->get();
                     
                        $numeroDeBacklogsById = count($backlogsCount);
                        if($numeroDeBacklogsById > 0){
                            $promedio =  round($backlogsYearSuma/$numeroDeBacklogsById,2);
                            $backlog = 'Backlog # ' . $idBacklog;
                
                            return compact('promedio', 'backlog');  
                        }else{
                            $promedio =  0;
                            $backlog = 'Backlog # ' . $idBacklog;
                            return compact('promedio', 'backlog');  

                        }
                    }
                }
      } 

      public function promedioBacklogActual($idArea){ // por backlog ultimo ingresado
               // verificar q exista por lo menos un backlog calificado perteneciente al area ()
               $existQualificateBacklogOfArea = DB::table('ss_backlog_year')
               ->where('ss_area_id', $idArea)
               ->count();
if($existQualificateBacklogOfArea == 0){
   // NO HAY BACKLOGS CALIFICADOS
   echo '<script language="javascript">alert("Se requieren configuraciones del usuario Administrador");</script>'; 
   print "<h2>GESTIONAR TUS BACKLOGS</h2>";
   print "Ingresa como administrador.<br>";
   print "Gestiona los usuarios y asignales por lo menos una calificación para ver la pantalla de bakclogs.";
   die();
}else{
        // determinar ultimo backlog calificado
        $ultimoBacklogRegistrado = DB::table('ss_backlog_year')
                                    ->latest('created_at')
                                    ->where('ss_area_id', $idArea)
                                    ->get();
                                                      
        // determinar nombre del backlog
        $backlogActualnombre = $this->backlogUtilizado($ultimoBacklogRegistrado[0]->ss_backlog_id, 1); // area consultoria
        $backlogPasadonombre = $this->backlogUtilizado($ultimoBacklogRegistrado[0]->ss_backlog_id - 1); // area consultoria
     
        $promedioActual = $this->promedioPorBacklog($ultimoBacklogRegistrado[0]->ss_backlog_id);
     
   
        //determinar backlog anterior y su promedio
        if($ultimoBacklogRegistrado[0]->ss_backlog_id - 1 > 0){
            $promedioAnterior = $this->promedioPorBacklog($ultimoBacklogRegistrado[0]->ss_backlog_id - 1);
          
            $newData = array();
            array_push($newData, $backlogActualnombre,$promedioActual,$backlogPasadonombre,$promedioAnterior);
            $data = [
                'nombreBacklogActual'=> $backlogActualnombre,
                'promedioActual' => $promedioActual,
                'nombreBacklogAnterior' => $backlogPasadonombre,
                'nombrePromedioAnterior' => $promedioAnterior,
            ];
      
            return $newData;      
        }

            }
        
       }
       public function promedioPorBacklog($idBacklog,$idArea = 1){
        //promedio backlog actuañ
        $backlogsActualPromedio= DB::table('ss_backlog_year')
        ->where('ss_backlog_id', $idBacklog)
        ->where('ss_area_id', $idArea)
        ->avg('qualification');
    
        return $backlogsActualPromedio;
       }
       public function backlogUtilizado($idBacklog){
        $nombreBaclklog = DB::table('ss_backlog')
        ->where('ss_backlog_id',$idBacklog)
        ->get();
        if(!empty($nombreBaclklog)){
            return $nombreBaclklog;
        }else{
            return '';
        }

       }

                     // PROMEDIO GLOBAL DE DESARROLLO AÑO ACTUAL
     public function promedioGlobal($idArea){
        $anio = DB::table('ss_year') // SUMATOIRA cmapos backlogs
        ->where('name', date('Y'))
        ->get();
                //promedio backlog actuañ
                $promedioGLobal= DB::table('ss_backlog_year')
                ->where('ss_area_id', $idArea)
                ->where('ss_year_id',$anio[0]->ss_year_id)
                ->avg('qualification');
                return $promedioGLobal;
    }
    }

