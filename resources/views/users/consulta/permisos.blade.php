@extends('layouts.app')

@section('titulo','Equipo')

@section('contenido')
      
      @foreach ($dbs as $db)
         <p>{{$db->aplicacion}}</p> 
         <p>{{$db->ipFija}}</p> 
         <p>{{$db->puerto}}</p>
      @endforeach      
@stop

