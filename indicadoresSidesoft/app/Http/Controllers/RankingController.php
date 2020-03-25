<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function rankingBacklogs(){
        $usersBacklogs = DB::table('ss_backlog_year')
        ->join('ss_user', 'ss_backlog_year.ss_user_id', '=', 'ss_user.ss_user_id')
        ->join('ss_backlog', 'ss_backlog_year.ss_backlog_id', '=', 'ss_backlog.ss_backlog_id')
        ->join('ss_year', 'ss_backlog_year.ss_year_id', '=', 'ss_year.ss_year_id')
        ->join('ss_area', 'ss_user.ss_area_id', '=', 'ss_area.ss_area_id')
        ->select('ss_backlog_year.*', 'ss_user.name', 'ss_backlog.name AS backlog', 'ss_year.name AS year', 'ss_area.name AS area')
        ->where('ss_year.name', date('Y'))// Unicamente detalla del 2020
        ->where('ss_area.ss_area_id',2)// Unicamente detalla del 2020
        ->get()->last();
        $arrayName = array();
        array_push($arrayName,$usersBacklogs);
        //return  $arrayName[0]->backlog; // NOMBRE DEL BACKLOG ULTIMO REGISTRADO
        // CONSULTAR LAS NOTAS DE LOS USUARIOS CON REFERENCIA AL ULTIMO BACKLOG
        // CONSULTAR A MI TABLA  backlog el id del backlog query anterior
  
        $backlog = DB::table('ss_backlog')
        ->where('name',$arrayName[0]->backlog)// Unicamente detalla del 2020
        ->get();
        //$backlog[0]->ss_backlog_id;  ENVIAR ESTE ID AL RANKING

        $rankingTecnico = DB::table('ss_backlog_year')
        ->join('ss_user', 'ss_backlog_year.ss_user_id', '=', 'ss_user.ss_user_id')
        ->join('ss_backlog', 'ss_backlog_year.ss_backlog_id', '=', 'ss_backlog.ss_backlog_id')
        ->join('ss_year', 'ss_backlog_year.ss_year_id', '=', 'ss_year.ss_year_id')
        ->join('ss_area', 'ss_user.ss_area_id', '=', 'ss_area.ss_area_id')
        ->select('ss_backlog_year.*', 'ss_user.name','ss_user.code_photo', 'ss_backlog.name AS backlog', 'ss_year.name AS year', 'ss_area.name AS area')
        ->where('ss_year.name', date('Y'))// Unicamente detalla del 2020
        ->where('ss_area.ss_area_id',2)// Unicamente detalla del 2020
        ->where('ss_backlog_year.ss_backlog_id',$backlog[0]->ss_backlog_id)// Unicamente detalla del 2020
        ->orderby('ss_backlog_year.qualification','DESC')
        ->get();

        $rankingConsultoria = DB::table('ss_backlog_year')
        ->join('ss_user', 'ss_backlog_year.ss_user_id', '=', 'ss_user.ss_user_id')
        ->join('ss_backlog', 'ss_backlog_year.ss_backlog_id', '=', 'ss_backlog.ss_backlog_id')
        ->join('ss_year', 'ss_backlog_year.ss_year_id', '=', 'ss_year.ss_year_id')
        ->join('ss_area', 'ss_user.ss_area_id', '=', 'ss_area.ss_area_id')
        ->select('ss_backlog_year.*', 'ss_user.name', 'ss_backlog.name AS backlog', 'ss_year.name AS year', 'ss_area.name AS area')
        ->where('ss_year.name', date('Y'))// Unicamente detalla del 2020
        ->where('ss_area.ss_area_id',1)// Unicamente detalla del 2020
        ->where('ss_backlog_year.ss_backlog_id',$backlog[0]->ss_backlog_id)// Unicamente detalla del 2020
        ->orderby('ss_backlog_year.qualification','DESC')
        ->get();
   
        $rankingSoporte = DB::table('ss_backlog_year')
        ->join('ss_user', 'ss_backlog_year.ss_user_id', '=', 'ss_user.ss_user_id')
        ->join('ss_backlog', 'ss_backlog_year.ss_backlog_id', '=', 'ss_backlog.ss_backlog_id')
        ->join('ss_year', 'ss_backlog_year.ss_year_id', '=', 'ss_year.ss_year_id')
        ->join('ss_area', 'ss_user.ss_area_id', '=', 'ss_area.ss_area_id')
        ->select('ss_backlog_year.*', 'ss_user.name', 'ss_backlog.name AS backlog', 'ss_year.name AS year', 'ss_area.name AS area')
        ->where('ss_year.name', date('Y'))// Unicamente detalla del 2020
        ->where('ss_area.ss_area_id',3)// Unicamente detalla del 2020
        ->where('ss_backlog_year.ss_backlog_id',$backlog[0]->ss_backlog_id)// Unicamente detalla del 2020
        ->orderby('ss_backlog_year.qualification','DESC')
        ->get();
       // return $ranking; // DATA DEL PROMEDIO DEL BACKLOG ACTUAL PARA EL RANKING
       // die();
        return view('ranking', compact('rankingTecnico', 'rankingConsultoria','rankingSoporte'));

    }

    // Verificar el ultimo backlog calculado
    // Order by qualificaction desc

    public function ranking(){
               // cargar informacion de la Historico Calificación Tecnicos Sidesoft 
             
    }
}
