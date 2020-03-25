<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\SsBacklogYear;
use App\Models\SsBacklog;
use App\Models\SsUser;
class PoliticsServiceRepository {

    //Politicas area tecnica
    public function allPolitics(){
        $allPolitics = DB::table('ss_politics')
        ->where('ss_area_id', 2) // area tecnica
        ->get(); 
        return  $allPolitics;
    }
    // Politicas area soporte
    public function allPoliticsSupport(){
        $allPolitics = DB::table('ss_politics')
        ->where('ss_area_id', 3) // area soporte
        ->get(); 
        return  $allPolitics;
    }
    // Politicas area soporte
    public function allPoliticsConsultants(){
        $allPolitics = DB::table('ss_politics')
        ->where('ss_area_id', 1) // area soporte
        ->get(); 
        return  $allPolitics;
    }

    public function getPolitic($id){
        $politic = DB::table('ss_politics')
        ->where('ss_politics_id', $id)
        ->get();
        return  $politic;
    }
    // DETALLES BACKLOGS_YEAR_POLITICS INNER POLITICS
    public function detailsBacklogPolitics($id_backlog_year,$id_backlog, $id_user, $id_area){
        $backlog_year_politics_user = DB::table('ss_backlog_year_politics')
        ->join('ss_backlog_year', 'ss_backlog_year_politics.ss_backlog_year_id', '=', 'ss_backlog_year.ss_backlog_year_id')
        ->join('ss_user', 'ss_backlog_year_politics.ss_user_id', '=', 'ss_user.ss_user_id')
        ->join('ss_area', 'ss_backlog_year_politics.ss_area_id', '=', 'ss_area.ss_area_id')
        ->join('ss_backlog', 'ss_backlog_year.ss_backlog_id', '=', 'ss_backlog.ss_backlog_id')
        ->join('ss_politics', 'ss_backlog_year_politics.ss_politics_id', '=', 'ss_politics.ss_politics_id')
        ->select('ss_backlog_year.*', 'ss_user.name', 'ss_backlog.name AS backlog', 'ss_backlog_year_politics.*', 'ss_politics.*')
        ->where('ss_backlog_year.ss_backlog_year_id',$id_backlog)
        ->where('ss_user.ss_user_id',$id_user)
        ->where('ss_area.ss_area_id',$id_area)
        ->get();
        return $backlog_year_politics_user;
    }      
}