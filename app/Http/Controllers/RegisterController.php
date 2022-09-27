<?php

namespace App\Http\Controllers;

use App\Http\Controllers\auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'direccion' => 'required',
            'empresa' => 'required',
            'name' => 'required|min:1|max:20',
            'apellido_paterno' => 'required|min:5|max:20',
            'apellido_materno' => 'required|min:5|max:20',
            'email' => 'required|unique:users|email|max:30',
            'password' => 'required|confirmed|min:8|max:30',
            'password_confirmation' => 'required|min:8|max:30'

        ]);

        User::create([

            'direccion' => $request->direccion,
            'empresa' => $request->empresa,
            'name' => $request->name,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'email' => $request->email,
            'password' => Hash::make ($request->password)
        ]);

        auth()->attempt($request->only('email','password'));

        return redirect()->route('post.index');


    }



}







