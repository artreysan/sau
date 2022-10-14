<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Proyectogitlab;
use App\Models\Proyectoglpi;
use App\Models\Proyectojira;
use App\Models\SistemaAplicaciones;
use App\Models\SistemaBaseDatosQa;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function consulta(){
        $equipos= Equipo::where('idUsuario',auth()->user()->id)->get();
        $gitlab= Proyectogitlab::where('idUsuario',auth()->user()->id)->get();   
        $jira= Proyectojira::where('idUsuario',auth()->user()->id)->get();   
        $glpi= Proyectoglpi::where('idUsuario',auth()->user()->id)->get();   
        return view('users.consulta.consulta',compact('equipos'),compact('gitlab','jira','glpi'),);
    }
    
    public function consultaPermisos($idEquipo){
        $dbs = SistemaBaseDatosQa::where('idEquipo',$idEquipo)->get();
        $apps = SistemaAplicaciones::where('idEquipo',$idEquipo)->get();
        $tools = SistemaAplicaciones::where('idEquipo',$idEquipo)->get();
        return view('users.consulta.permisos',compact('dbs'));
    }

    
}
