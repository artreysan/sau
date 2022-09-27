<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Solicitud;
use App\Models\Solicitud as ModelsSolicitud;

class SolicitudesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    
        return view('solicitud');
    }

    public function downloadPdf(){
        $pdf_name = time().'_sau.pdf';
        $pdf = Pdf::loadView('solicitud.sau');
        $pdf->setPaper('a4');
        return $pdf->stream();
    }
    
    public function crear (Request $request){
        //return $request->all();
        $solicitud = new  ModelsSolicitud();

        $solicitud->nombre = $request->nombre;
        $solicitud->apellido_paterno = $request->apellido_paterno;
        $solicitud->apellido_materno = $request->apellido_materno;
        $solicitud->autorizador = $request->autorizador;
        $solicitud->puesto = $request->puesto;
        $solicitud->empresa = $request->empresa;
        $solicitud->direccion = $request->direccion;
        $solicitud->contrato = $request->contrato;
        $solicitud->funcion = $request->funcion;
        $solicitud->direccion = $request->direccion;
        $solicitud->ip_fija = $request->ip_fija;
        $solicitud->internet = $request->internet;
        $solicitud->tipo_equipo = $request->tipo_equipo;
        $solicitud->dir_activo = $request->dir_activo; 
        $solicitud->marca = $request->marca;
        $solicitud->modelo = $request->modelo;
        $solicitud->serie = $request->serie;
        $solicitud->mac = $request->mac;
        $solicitud->ip_antigua = $request->ip_antigua;
        $solicitud->equipo_propio = $request->equipo_propio;
        $solicitud->equipo_sict = $request->equipo_sict;

        $solicitud->save();

        return redirect()->route('post.index');
       // return redirect()->route('posts.index');
    }

    public function store(Request $request)
    {
    
        $this->validate($request,[
            'nombre' => 'required|min:1|max:20',
            'apellido_paterno' => 'required|min:5|max:100',
            'apellido_materno' => 'required|min:5|max:100',
            'autorizador' => 'required',
            'puesto' => 'required',
            'empresa' => 'required',
            'direccion' => 'required',
            'contrato' => 'required',
            'funciones' => 'required|max:200',
            'dir_activo',
            'ip_fija',
            'internet',
            'tipo_equipo' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'serie' => 'required',
            'mac' => 'required',
            'ip_antigua' => 'required',
            'equipo_propio' => 'required',
            'equipo_sict' => 'required'
        ]);


    }

}


