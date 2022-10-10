@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<br>
<br>

<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header" name="datos_solicitante">
					<h4>Información del usuario:</h4>
				</div>
			</div>
		</nav>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Nombre(s):</strong></div>
			<div class="col-md-3">
				<p>{{auth()->user()->name}}</p>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"><strong>Apellido paterno:</strong></div>
			<div class="col-md-3">
				<p>{{auth()->user()->apellido_paterno}}</p>	
			</div>
			<div class="col-md-3"><strong>Apellido materno:</strong></div>
			<div class="col-md-3">
				<p>{{auth()->user()->apellido_materno}}</p>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"><strong>Correo electronico:</strong></div>
			<div class="col-md-3">
				<p>{{auth()->user()->email}}</p>	
			</div>
		</div>	
		<br>
        
        <br>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header" name="datos_solicitante">
					<h4>Servicios permitidos:</h4>
				</div>
			</div>
		</nav>
		<br>
		
		<h4>Servicios TIC</h4>
        @if (auth()->user()->ipFija == "" && auth()->user()->internet == "" && auth()->user()->vpn == "")
            <div class="alert alert-danger">
                Sin acceso a servicios.
            </div>
        @else
		<div class="row">
            @if (auth()->user()->ipFija!= "")
                <div class="col-md-3"><strong>IP Fija:</strong></div>
                <div class="col-sm-3">{{auth()->user()->ipFija}}</div>
                <br>
                <br>
            @endif
            @if (auth()->user()->internet != "")
                <div class="col-md-3"><strong>Internet:</strong></div>
                <div class="col-sm-3">{{auth()->user()->internet}}</div>
                <br>
                <br>
            @endif
            @if (auth()->user()->vpn != "")
                <div class="col-md-3"><strong>VPN:</strong></div>
                <div class="col-sm-3">{{auth()->user()->vpn}}</div>
                <br>
                <br>
            @endif
        </div>
		<br>
        @endif

		<h4>Proyectos</h4>
        @if (auth()->user()->gitlab == "" && auth()->user()->jira == "" && auth()->user()->glpi == "")
            <div class="alert alert-danger">
                Sin acceso a proyectos.
            </div>            
        @else
            <div class="row">
                @if (auth()->user()->gitlab!= "")
                    <div class="col-md-3"><strong>GitLab:</strong></div>
                    <div class="col-sm-3">{{auth()->user()->gitlab}}</div>
                    <br>
                    <br>
                @endif
                @if (auth()->user()->jira!= "")
                    <div class="col-md-3"><strong>JIRA:</strong></div>
                    <div class="col-sm-3">{{auth()->user()->jira}}</div>
                    <br>
                    <br>
                @endif
                @if (auth()->user()->glpi != "")
                    <div class="col-md-3"><strong>GLPI:</strong></div>
                    <div class="col-sm-3">{{auth()->user()->glpi}}</div>
                    <br>
                    <br>
                @endif
		    </div>
        @endif

		</div>
		</div>

        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{ url('/muro') }}">
                        <button class="btn btn-default " type="button"> 
                        Regresar
                        </button>
                    </a>
                </div>	
            </div>
        </div>  
        <br>
		<br>
	</div>

@endsection