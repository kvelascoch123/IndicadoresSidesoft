<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PoliticsServiceRepository;
use DateTime;
use Illuminate\Support\Facades\DB;


class PoliticsController extends Controller
{
    
    public function getPage(){
        $gestionPolitics = new PoliticsServiceRepository;      
        $politics = $gestionPolitics->allPolitics(); // area tecnica
        return $politics;    
    }
        
    public function addToCalification($idPolitica){
        //BUSCAR EN BD Y TRAER AL ARRAY 
        $gestionPolitics = new PoliticsServiceRepository;      
        $politics = $gestionPolitics->getPolitic($idPolitica);

        $almacenPiliticsSelect = array( );
        array_push($almacenPiliticsSelect, $politics);
        return $almacenPiliticsSelect;
    }
    public function addBacklogYearPolitics(Request $request){
            // insertar en tabla baclogs_year_politics
            $arrayName = array( );
            foreach ($request->input('ss_politics_check') as $key) {
               array_push($arrayName, $key);
            }
           // return $request->input('ss_politics_check');
            for ($i=0; $i < count($arrayName); $i++) {
                $fecha = new DateTime('NOW');     
                DB::table('ss_backlog_year_politics')->insert(
                    ['ss_backlog_year_id' => $request->input('backlog_id'),
                     'ss_politics_id' => $arrayName[$i],
                     'ss_area_id' => $request->input('area_id'),
                     'ss_user_id' => $request->input('usuario_id'),
                     'description' => $request->input('description'),
                     'isactive' => true, 
                     'created_at'=> $fecha->format('Y-m-d H:i:s')
                
                ]);
            }
            // todas las politicas RESTAN where id_user id_baklgo id_area
            $total_points_restan = DB::table('ss_backlog_year_politics')
            ->join('ss_politics', 'ss_backlog_year_politics.ss_politics_id', '=', 'ss_politics.ss_politics_id')
            ->where('ss_backlog_year_politics.ss_user_id',$request->input('usuario_id') )
            ->where('ss_backlog_year_politics.ss_area_id',$request->input('area_id') )
            ->where('ss_backlog_year_politics.ss_backlog_year_id',$request->input('backlog_id') )
            ->where('ss_politics.type', 'resta')
            ->where('ss_user_id',$request->input('usuario_id') )
            ->sum('ss_politics.points');

                        // todas las politicas RESTAN where id_user id_baklgo id_area
            $total_points_suman = DB::table('ss_backlog_year_politics')
            ->join('ss_politics', 'ss_backlog_year_politics.ss_politics_id', '=', 'ss_politics.ss_politics_id')
            ->where('ss_backlog_year_politics.ss_user_id',$request->input('usuario_id') )
            ->where('ss_backlog_year_politics.ss_area_id',$request->input('area_id') )
            ->where('ss_backlog_year_politics.ss_backlog_year_id',$request->input('backlog_id') )
            ->where('ss_politics.type', 'suma')
            ->where('ss_user_id',$request->input('usuario_id') )
            ->sum('ss_politics.points');
            $points = $total_points_suman - $total_points_restan;
            
            // update a table backlog year
            DB::table('ss_backlog_year')
            ->where('ss_backlog_id', $request->input('backlog_id'))
            ->where('ss_user_id', $request->input('usuario_id'))
            ->where('ss_area_id', $request->input('area_id'))
            ->update(['points_politics' => $points ]);
            return redirect()->route('page.admin')->with('info','Registro politicas sidesoft correcto.'); 
            
    }

    // VER DETALLES DE LA POLITICA
  // <td> <a href="/getBaklogYear/{{$userValue->ss_backlog_year_id}}/politics/{{$userValue->ss_backlog_id}}/{{$userValue->ss_user_id}}/{{$userValue->ss_area_id}}"> {{$userValue->qualification}}  // {{$userValue->points_politics}} </a></td>
    public function getPoliticsDetails($id_backlog_year,$id_backlog, $id_user, $id_area){
    // BUSCAR LOS BAKCLOS_YEAR_POLITICS 
    //INNER WITH POLITICS 
    // SHOW DETALLES
    $gestionPolitics = new PoliticsServiceRepository;      
    $politicsDetails = $gestionPolitics->detailsBacklogPolitics($id_backlog_year,$id_backlog,$id_user, $id_area );

    return view('detailsBacklogsPolitics', compact('politicsDetails'));
}
}
