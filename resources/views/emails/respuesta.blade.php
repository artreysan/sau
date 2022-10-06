@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
    <h1>Respuesta de Solicitud</h1>
    <p>{{$solicitud->nombre}}</p>
@endsection