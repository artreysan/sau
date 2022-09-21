@extends('layouts.app')

@section('titulo')

<?php
class direccion {
    public $ubicacion;
}

$ubicacion1 = new direccion;
$ubicacion1->ubicacion = "Av. Insurgentes Sur 1089, Col. Nochebuena, Benito Juárez, 3720, CDMX. Piso 8";

$ubicacion2 = new direccion;
$ubicacion2->ubicacion = "Av. Insurgentes Sur 1089, Col. Nochebuena, Benito Juárez, 3720, CDMX. Piso 9";

class empresa {
    public $nombre;
    public $contrato;
}

$empresa1 = new empresa;
$empresa1->nombre = "Patito S.A. de C.V";
$empresa1->contrato = "MVC-4589";
?>

    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header" name="datos_solicitante">
                    <h4>Información del usuario a registrar:</h4>
                </div>
            </div>
        </nav>
        <hr class="red">
    </div>
@endsection

@section('contenido')
    <style>
        input:focus {
            border-color: rgb(32, 107, 80);
            box-shadow: 0 1px 1px rgb(32, 107, 80)inset, 0 0 8px rgb(32, 107, 80);
            outline: 0 none;
        }
    </style>

    <form action="/crear" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-3"><strong>Ubicación en la SICT:</strong></div>
                <div class="col-md-3">
                    <select name="direccion">
                        <option value="ubicacion1">Av. Insurgentes Sur 1089, Col. Nochebuena, Benito Juárez, 3720, CDMX.
                            Piso 8</option>
                        <option value="ubicacion2">Av. Insurgentes Sur 1089, Col. Nochebuena, Benito Juárez, 3720, CDMX.
                            Piso 9</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"><strong>Empresa:</strong></div>
                <div class="col-md-4">
                    <select name="empresa">
                        <option value="empresa1"> Electronica Sacachispas S.A de C.V </option>
                        <option value="empresa2"> Patito S.A. de C.V </option>
                    </select>
                </div>
                <div class="col-md-2"><strong>Contrato</strong></div>
                <div class="col-md-2">
                    <select name="contrato">
                        <option value="contrato1"> MVC-4589 </option>
                        <option value="contrato2"> BBC-3789 </option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3"><strong>Apellido paterno:</strong></div>
                <div class="col-md-3">
                    <input class="border-success" id="apellido_paterno" name="apellido_paterno" type="text"
                        placeholder=" Tu apellido paterno " value="{{ old('apellido_paterno') }}" />
                </div>
                <br>
                <br>
                @error('apellido_paterno')
                    <div class="alert alert-danger w-75 ">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-3"><strong>Apellido materno:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" id="apellido_materno" name="apellido_materno" type="text"
                        placeholder=" Tu apellido materno " value="{{ old('apellido_materno') }}" />
                </div>
                <br>
                <br>
                @error('apellido_materno')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-3"><strong>Nombre(s):</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" id="name" name="name" type="text"
                        placeholder=" Tu nombre " value="{{ old('name') }}" />
                </div>
                <br>
                <br>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-3"><strong>Email:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" id="email" name="email" type="text"
                        placeholder=" nombre@ejemplo.com " value="{{ old('email') }}" />
                </div>
                <br>
                <br>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3"><strong>Contraseña:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" id="password" name="password" type="password"
                        placeholder=" Contraseña " />
                </div>
                <br>
                <br>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-3"><strong>Repite tu contraseña:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" id="password_confirmation" name="password_confirmation"
                        type="password" placeholder=" Repite tu contraseña " />
                </div>
                <br>
                <br>
                @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <input type="submit" value="Crear cuenta" class="btn btn-primary btn-md active" />
        </div>
        <br>
        <br>
    </form>
@endsection
