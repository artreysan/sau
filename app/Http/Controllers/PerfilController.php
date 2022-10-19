<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function vistaPerfil(){
        return view('users.perfil.perfil');
    }
}
