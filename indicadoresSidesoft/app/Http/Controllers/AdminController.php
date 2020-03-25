<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\AdminServiceRepository;
use App\Repositories\PoliticsServiceRepository;

use DateTime;

use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class AdminController extends Controller
{

    public function __construct(){
            $this->middleware('auth');
    }


    public function getPage(){
       
        
        $gestionAdmin = new AdminServiceRepository;
    
        $backlogs = $gestionAdmin->getBacklogsYear();  // TODOS 
        $usuarios = $gestionAdmin->getUsers();  // TODOS 
        // para selecionar el usuario a calificar en los modales
        $usuariosPorAreaConsultoria = $gestionAdmin->getUsersByAreaConsultoria(1); // ID DEL AREA
        $usuariosPorAreaTecnica = $gestionAdmin->getUsersByAreaTecnica(2); // ID DEL AREA
        $usuariosPorAreaSoporte = $gestionAdmin->getUsersByAreaSoporte(3); // ID DEL AREA
        $gestionPolitics = new PoliticsServiceRepository;      
        $politics = $gestionPolitics->allPolitics(); // area tecnica
        $politicsSupport = $gestionPolitics->allPoliticsSupport(); // area tecnica
        $politicsConsultants = $gestionPolitics->allPoliticsConsultants(); // area tecnica

        return view('administrador', compact('backlogs','usuarios','usuariosPorAreaConsultoria','usuariosPorAreaTecnica','usuariosPorAreaSoporte', 'politics', 'politicsSupport','politicsConsultants')); 
    }
// Buscar backlog a ser calificado , si esta calificado el backlo 1 pase al backolg 2
public function searchBacklogByUser(Request $request){
       // print_r($request->all());
        // buscar al usuario

        $gestionAdmin = new AdminServiceRepository;
        $user = $gestionAdmin->getUserById($request->input('nombreUsuario'),$request->input('ss_area_id'));   
      
        $allBacklogs = $gestionAdmin->getBacklogs();  
        if(!empty($user)){
             $backlogsUser = $gestionAdmin->getBacklogsYearByIdUser($user[0]->ss_user_id);
 
             $promedio = $gestionAdmin->promedioByUser($user[0]->ss_user_id);
             $backlogsNoCalificados =  $gestionAdmin->getBacklogsNoCalificados($user[0]->ss_user_id);
             $area = $gestionAdmin->getArea($user[0]->ss_area_id); // SOLO AREA TECNICA CON ID 2
            return view('backlogsUsuarios' ,compact('user','backlogsUser','allBacklogs','promedio','backlogsNoCalificados','area'));
        }
        return 'VACIO';

}

// CREAR BACKLOG
  public function crearBacklog(Request $request){ 


    //buscar id año
    //buscar id usuario
     $year = DB::table('ss_year')
    ->where('name', date('Y'))
    ->get();

    $developer = DB::table('ss_user')
    ->where('ss_user_id', $request->input('user_id'))
    ->get();
  
    if(empty($developer)  || empty($year) || empty($request->input('ss_backlog_id')) ){
        echo '<script language="javascript">alert("Parámetros inválidos");</script>'; 
    }else{
        $isQualificated = DB::table('ss_backlog_year')
        ->where('ss_backlog_id', $request->input('ss_backlog_id'))
        ->where('ss_user_id', $request->input('user_id'))
        ->first();
        
        if(empty($isQualificated)){
            $fecha = new DateTime('NOW');    
            DB::table('ss_backlog_year')->insert(
                ['ss_backlog_id' => $request->input('ss_backlog_id'),
                'ss_year_id' => $year[0]->ss_year_id,
                'ss_user_id' => $developer[0]->ss_user_id,
                'ss_area_id' => $request->input('area_id'),
                'points_politics' => 0,
                'qualification' => $request->input('qualification'),
                'isactive' => 1,
                'description' => $request->input('description'),
                'created_at'=> $fecha->format('Y-m-d H:i:s')]

            );
        return redirect()->route('page.admin')->with('info','Registro calificación backlog correcto'); 

                   }else{
             // encontro algun registro con el mismo backlog calificado del usuario a calificar
//            echo '<script language="javascript">alert("Backlog del usuario ya calificado. Selecione el siguiente backlog.");</script>'; 
return redirect()->route('page.admin')->with('error','Registro NO aceptado. El backlog del usuario ya fue calificado, elija el siguiente backlog.');

                  }            
    }
 }

 public function editBacklogYear($idBAcklog, $idUser){
    // Consulatar la informacion del backlog a editar
    $gestionAdmin = new AdminServiceRepository;
    $backlogToEdit = $gestionAdmin->getBacklogYearToEdit($idBAcklog, $idUser);
    return view('editBacklogYear', compact('backlogToEdit'));
 }
    
public function editConfirmar($idBacklogYearToEdit  ,Request $request){
    
    $fecha = new DateTime('NOW'); 
    $year = DB::table('ss_year')
    ->where('name', date('Y'))
    ->get(); 
  
    DB::table('ss_backlog_year')
    ->where('ss_backlog_year_id', $idBacklogYearToEdit)
    ->update( 
    ['ss_backlog_id' => $request->input('ss_backlog_id'), // falta
    'ss_year_id' => $year[0]->ss_year_id,
    'ss_user_id' => $request->input('user_id'),
    'ss_area_id' => $request->input('area_id'), //
    'qualification' => $request->input('qualification'),
    'isactive' => 1,
    'description' => $request->input('description'),
    'updated_at'=> $fecha->format('Y-m-d H:i:s')]
    );

    return redirect()->route('page.admin')->with('info','Registro editado '); 

}
}
