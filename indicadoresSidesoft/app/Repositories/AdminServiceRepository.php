<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\SsBacklogYear;
use App\Models\SsBacklog;
use App\Models\SsUser;
class AdminServiceRepository {
    // obtener los backlogs para determinar su calificacion
    public function getBacklogsYear(){

     
        // cargar informacion de la Historico Calificación Tecnicos Sidesoft 
        $usersBacklogs = DB::table('ss_backlog_year')
        ->join('ss_user', 'ss_backlog_year.ss_user_id', '=', 'ss_user.ss_user_id')
        ->join('ss_backlog', 'ss_backlog_year.ss_backlog_id', '=', 'ss_backlog.ss_backlog_id')
        ->join('ss_year', 'ss_backlog_year.ss_year_id', '=', 'ss_year.ss_year_id')
        ->join('ss_area', 'ss_user.ss_area_id', '=', 'ss_area.ss_area_id')
        ->select('ss_backlog_year.*', 'ss_user.name', 'ss_backlog.name AS backlog', 'ss_year.name AS year', 'ss_area.name AS area')
        ->orderBy('ss_backlog_year_id', 'desc')
        ->where('ss_year.name', date('Y'))// Unicamente detalla del 2020
        ->get();
        return  $usersBacklogs;

    }
    public function getBacklogsYearByIdUser($idUser){
       
        $calificadoBacklog = SsBacklogYear::find($idUser);
        if(!empty($calificadoBacklog)){
            $usersBacklogs = SsBacklogYear::find($idUser)
            ->join('ss_user', 'ss_backlog_year.ss_user_id', '=', 'ss_user.ss_user_id')
            ->join('ss_backlog', 'ss_backlog_year.ss_backlog_id', '=', 'ss_backlog.ss_backlog_id')
            ->join('ss_year', 'ss_backlog_year.ss_year_id', '=', 'ss_year.ss_year_id')
            ->join('ss_area', 'ss_user.ss_area_id', '=', 'ss_area.ss_area_id')
            ->select('ss_backlog_year.*', 'ss_user.name', 'ss_backlog.name AS backlog', 'ss_year.name AS year', 'ss_area.name AS area')
            ->orderBy('ss_backlog_year_id', 'desc')
            ->where('ss_backlog_year.ss_user_id', $idUser)// Unicamente detalla del 2020
            ->get();
            return  $usersBacklogs;
        }
    }
    public function getUsers(){
        $users = SsUser::all(); // qury
        $usuarios = [];// almacen
        foreach ($users as $key ) {
            array_push($usuarios,$key->name);
        }
        return $usuarios; 
    }

    public function getUserById($idUser, $idArea){
        $usuarios = DB::table('ss_user')
        ->where('name' , $idUser)
        ->where('ss_area_id', $idArea)
        ->get();  

        return $usuarios;
    }

    public function getBacklogs(){ // TODOS LOS BAGLOS EXISTENTES
        $backlogs = SsBacklog::find(1)
        ->get();    
        return $backlogs;
    }

    public function promedioByUser($idUser){
        
        $backlogsYearSuma = DB::table('ss_backlog_year') // SUMATOIRA cmapos backlogs
        ->where('ss_user_id',$idUser) 
        ->where('ss_year_id',2)// cambiar el año PARAMETRIZAR
        ->sum('qualification'); // total suma
        // cantidad de notas para el promedio
        $backlogsYearCount = DB::table('ss_backlog_year') // SUMATOIRA cmapos backlogs
        ->where('ss_year_id',2)// cambiar el año PARAMETRIZAR
        ->where('ss_user_id',$idUser) 
        ->get(); // total suma
        if(count($backlogsYearCount) != 0){
            $promedio = round($backlogsYearSuma/count($backlogsYearCount),2);
            return $promedio; 
        }

    }

    public function getBacklogsNoCalificados($idUser){
        $backlogsNoCalifiados = DB::table('ss_backlog')
        ->leftjoin('ss_backlog_year', 'ss_backlog.ss_backlog_id', '=', 'ss_backlog_year.ss_backlog_id')
        ->select('ss_backlog.*', 'ss_backlog.ss_backlog_id AS idBacklog','ss_backlog_year.*')
        ->get(); 
        return $backlogsNoCalifiados;
    }

    public function getUsersByAreaTecnica($idArea)
    {
        $allUserByArea = DB::table('ss_user') // SUMATOIRA cmapos backlogs
        ->where('ss_area_id',$idArea) 
        ->get();
        return $allUserByArea;
    }
    public function getUsersByAreaConsultoria($idArea)
    {
        $allUserByArea = DB::table('ss_user') // SUMATOIRA cmapos backlogs
        ->where('ss_area_id',$idArea) 
        ->get();
        return $allUserByArea;
    }

    public function getUsersByAreaSoporte($idArea)
    {
        $allUserByArea = DB::table('ss_user') // SUMATOIRA cmapos backlogs
        ->where('ss_area_id',$idArea) 
        ->get();
        return $allUserByArea;
    }

    public function getArea($idArea){
        $areaUser = DB::table('ss_area') // Area para calificar
        ->where('ss_area_id',$idArea) 
        ->get();
        return $areaUser;
    }
    public function getBacklogYearToEdit($idBacklogYear, $idUser){
        $backlogYearToEdit = DB::table('ss_backlog_year')
        ->join('ss_backlog', 'ss_backlog_year.ss_backlog_id', '=', 'ss_backlog.ss_backlog_id')
        ->join('ss_user', 'ss_backlog_year.ss_user_id', '=', 'ss_user.ss_user_id')
        ->join('ss_year', 'ss_backlog_year.ss_year_id', '=', 'ss_year.ss_year_id')
        ->join('ss_area', 'ss_user.ss_area_id', '=', 'ss_area.ss_area_id')
        ->select('ss_backlog_year.*', 'ss_user.name',  'ss_year.name AS year', 'ss_area.name AS area', 'ss_backlog.name AS backlog')
        ->where('ss_backlog_year.ss_backlog_year_id', $idBacklogYear)// Unicamente detalla del 2020
        ->where('ss_backlog_year.ss_user_id', $idUser)// Unicamente detalla del 2020
        ->first();
        return $backlogYearToEdit;
    }
    

} 