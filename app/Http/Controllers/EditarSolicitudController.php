<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;

class EditarSolicitudController extends Controller
{
    public function index()
    {
        $solicitud = Solicitud::all();
        return view('editar');
    }
}
