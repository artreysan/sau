@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">
  <div class="container">
    <div class="collapse navbar-collapse" id="subenlaces">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/muro">{{auth()->user()->name}} {{auth()->user()->apellido_paterno}} {{auth()->user()->apellido_materno}}</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"></a></li>
            <li><a href="#">Algo</a></li>
            <li><a href="#">Algo más aquí</a></li>
            <li class="divider"></li>
            <li><a href="{{route('logout')}}">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <a href="{{ url('/solicitud') }}">
              <button class="btn btn-default glyphicon glyphicon-plus-sign"type="button"> Solicitud </button></a>
        </div>
        <div class="col-md-2">
          <button class="btn btn-primary" type="">
            Buscar
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
    </div>
    <br>
    <hr class="red">
    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#tab-01">Pendientes</a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab-02">Concluidas</a>
        </li>
      </ul>    
      <div class="tab-content">
        <div class="tab-pane active" id="tab-01">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Fecha de solicitud</th>
                    <th scope="col">Colaborador</th>
                    <th scope="col">Autorizador</th>
                    <th scope="col">Status</th>
                    <th scope="col">Detalles</th>
                </thead>
                <tbody class="table-group-divider">
                  @foreach ($solicitud as $solicitud)
                  <tr>
                    <th scope="row">{{$solicitud->fileID}}</th>
                    <td>{{$solicitud->created_at}}</td>
                    <td>{{$solicitud->nombre}} {{$solicitud->apellido_paterno}}</td>
                    <td>{{$solicitud->autorizador}}</td>
                    <td>Activo</td>
                    <td>
                      <li class="dropdown"><button class="glyphicon glyphicon-folder-open" data-toggle="dropdown"></button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Revisar</a></li>
                            <li><a href="{{url('/editar')}}">Editar</a></li>
                            <li><a href="{{url('/muro/stream-pdf/'.$solicitud->fileID)}}" target="_blank">Generar PDF</a></li>
                          </ul>
                     </li>
                    </td>                
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
        </div>
        <br>
        <div class="tab-pane" id="tab-01"></div>
        <div class="tab-pane" id="tab-02"></div>
      </div>
      <br>
      <br>
      <div class="panel-group ficha-collapse" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-parent="#accordion" data-toggle="collapse" href="#panel-01" aria-expanded="true" aria-controls="panel-01"> Notas </a>

            </h4>
            <button type="button" class="collpase-button collapsed" data-parent="#accordion" data-toggle="collapse" href="#panel-01"></button>
          </div>
          <div class="panel-collapse collapse in" id="panel-01">
            <div class="panel-body">
                Aquí van algunas notas importantes de mencionar para los usuarios
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>

</div>


@endsection
