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
            <li><a href="{{route('principal')}}">Cerrar sesión</a></li>
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
  @if (auth()->user()->solicitudes == 0)
    <div class="row">
      <div class="col-md-2">
          <a href="{{ url('/solicitud') }}">
            <button class="btn btn-default " type="button"> 
              Registro 
              <span class="glyphicon glyphicon-plus-sign"> </span>
            </button>
          </a>
      </div>
  @else
    <div class="row">
    @if (
        auth()->user()->ipFija!= ""
        && auth()->user()->internet!= ""
        && auth()->user()->vpn!= ""
        && auth()->user()->gitlab!= ""
        && auth()->user()->jira!= ""
        && auth()->user()->glpi!= ""
        )
    @else     
      <div class="col-md-2">
        
          <a href="{{ url('/solicitud') }}">
            <button class="btn btn-default " type="button"> 
              Solicitud 
              <span class="glyphicon glyphicon-plus-sign"> </span>
            </button>
          </a>
      </div>
    @endif
      <div class="col-md-2">
          <a href="{{ url('/solicitud') }}">
            <button class="btn btn-default " type="button"> 
              Baja
              <span class="glyphicon glyphicon-plus-sign"> </span>
            </button>
          </a>
      </div>
      <div class="col-md-2">
          <a href="{{ url('/consulta') }}">
            <button class="btn btn-default " type="button"> 
              Consulta
              <span class="glyphicon glyphicon-plus-sign"> </span>
            </button>
          </a>
      </div>
      
    </div>
  @endif
  
  @if (auth()->user()->solicitudes > 0)
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
                    <th scope="col">Estado</th>
                    <th scope="col">Autorizador</th>
                    <th scope="col">Status</th>
                    <th scope="col">Detalles</th>
                </thead>
                <tbody class="table-group-divider">
                  @foreach ($solicitud as $solicitud)
                  <tr>
                    <th scope="row">{{$solicitud->fileID}}</th>
                    <td>{{$solicitud->created_at}}</td>
                    <td>
                      @if ( time() - $solicitud->startTime >0 && time() - $solicitud->startTime < 3)
                        <div id="circulo verde" style="height:30px; width:30px; background:#00ff00; -moz-border-radius:50px; -webkit-border-radius:50px; border-radius:50px;"></div>
                      @elseif ( time() - $solicitud->startTime >3 && time() - $solicitud->startTime < 6)
                        <div id="circulo verde" style="height:30px; width:30px; background:#FF9326; -moz-border-radius:50px; -webkit-border-radius:50px; border-radius:50px;"></div>
                      @elseif ( time() - $solicitud->startTime >6 && time() - $solicitud->startTime < 9)
                          <div id="circulo verde" style="height:30px; width:30px; background:#cc0000; -moz-border-radius:50px; -webkit-border-radius:50px; border-radius:50px;"></div>
                      @else
                          <div id="circulo verde" style="height:30px; width:30px; background:#000; -moz-border-radius:50px; -webkit-border-radius:50px; border-radius:50px;"></div>
                      @endif
                      
                    </td>
                    <td>{{$solicitud->autorizador}}</td>
                    <td>Activo</td>
                    <td>
                      <li class="dropdown"><button class="glyphicon glyphicon-folder-open" data-toggle="dropdown"></button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="/mostrar/{{$solicitud->fileID}}">Revisar</a></li>
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
      
  @endif
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>


@endsection
