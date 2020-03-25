<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SsUser;
use App\Models\SsArea;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showPageGestionUsers()
    {
        $areas = SsArea::all();
        $usuarios = DB::table('ss_user') //USUARIOS REGISTRADOS --no del sistema
        ->join('ss_area', 'ss_user.ss_area_id', '=', 'ss_area.ss_area_id')
        ->select('ss_user.*', 'ss_area.name AS areaNombre')
        ->get();
    
        return view('gestionusers', compact('areas', 'usuarios'));//cargar areas
    }

    public function registrarUsuarios(Request $request)
    {
    
        $usuario = new SsUser;

        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->ss_area_id = $request->input('area_id');
        $usuario->value = $request->input('value');
        $usuario->isactive = $request->input('isactive');
        $usuario->description = $request->input('description');
        $usuario->tax_id = $request->input('tax_id');
        $usuario->code_photo = $request->input('code_photo');
        $usuario->save();
        
        return redirect()->route('user.index')->with('info', 'Usuario registrado');
    }
    
}
