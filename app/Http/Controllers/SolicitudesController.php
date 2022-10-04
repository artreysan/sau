<?php

namespace App\Http\Controllers;

use view;
use Svg\Tag\Path;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\SolicitudMailable;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Solicitud;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

    public function sendMail($solicitud){
        $this->downloadPdf($solicitud);
        $correo = new SolicitudMailable;
        Mail::to($solicitud->emailSend)->send($correo->attach(storage_path('pdf/'.$solicitud->fileID.'_sau.pdf')));
        return "Menasaje enviado";
    }
    

    
    public function downloadPdf($solicitud){
        $path = storage_path('pdf/');
        $pdf_name = time().'_sau.pdf';
        $data = [$solicitud->nombre];
        $pdf = Pdf::loadView('solicitud.sau', array('solicitud'=>$solicitud));
        $pdf->save($path.'/'.$pdf_name);
        $pdf->setPaper('a4');
        return $pdf->stream($pdf_name);
    }

    public function streamPDF( $fileID){
        return response()->file(storage_path('pdf/'.$fileID.'_sau.pdf'));
    }
    

    //Funcion para almacenar con ORM datos a la base de datos
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
        $solicitud->fileID = time();
        $solicitud->emailSend = $request->emailSend;

        $solicitud->save();
        $this->sendMail($solicitud);        
         

        return redirect()->route('post.index');
       // return redirect()->route('posts.index');
    }


    public function store(Request $request){
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

        User::create([
            'ubicacion' => $request->ubicacion,
            'empresa' => $request->empresa,
            'contrato' => $request->contrato,
            'name' => $request->name,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'email' => $request->email,
            'password' => Hash::make ($request->password)
        ]);

        auth()->attempt($request->only('email','password'));

        return redirect()->route('posts.index');
    }



}


