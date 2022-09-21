@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="background-color:#F6F6F6;"><h4 text-gray-700>Bienvenid@ {{auth()->user()->name}}</h4></div>
        <form method="POST" action="{{ url('cerrar') }}">
            @csrf
            <div class="col-md-2">
                    <button class="btn btn-primary" type="submit">
                        Cerrar sesión
                    </button>
            </div>
        </form>
    </div>
    <hr class="red">



    <div class="row">
        <div class="col-md-2"><h5>Realizar solicitud</h5></div>
        <div class="col-md-2">
            <a href="{{ url('/solicitud') }}"><button class="btn btn-primary btn-sm active"type="button"> Realizar solicitud</button> </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"><h5>Editar solicitud</h5></div>
        <div class="col-md-2">
            <a href="{{ url('/solicitud') }}"><button class="btn btn-primary btn-sm active"type="button"> Editar solicitud</button> </a>
        </div>
    </div>
    <br>
    <hr>
    <br>
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
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">1</th>
                    <td>23-Mayo-2022</td>
                    <td>Pendiente</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>22-Mayo-2022</td>
                    <td>Validado</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>15-Septiembre-2022</td>
                    <td>Validado</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <br>
        <div class="tab-pane" id="tab-01">...</div>
        <div class="tab-pane" id="tab-02">...</div>
        <div class="tab-pane" id="tab-03">...</div>
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
