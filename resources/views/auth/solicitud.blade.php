@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')

<?php


class autorizador {
    public $nombre;
    public $puesto;
}

$autorizador1 = new autorizador;
$autorizador1->nombre = "Ing. Mario César Herrera González";
$autorizador1->puesto = "Director Coordinador de Innovación y Desarrollo Tecnológico";

$autorizador2 = new autorizador;
$autorizador2->nombre = "Ing. José Antonio Rulfo Zaragoza";
$autorizador2->puesto = "Director de Desarrollo Tecnológico";

$autorizador3 = new autorizador;
$autorizador3->nombre = "Mtra. Edna Patricia Santiago Vargas";
$autorizador3->puesto = "Subdirectora de Sistemas Administrativos";

$autorizador4 = new autorizador;
$autorizador4->nombre = "Ing. David de León Muñoz";
$autorizador4->puesto = "Subdirector de Innovación Tecnológica";

$autorizador5 = new autorizador;
$autorizador5->nombre = "Ing. Iracema Mirón Ramírez";
$autorizador5->puesto = "Subdirectora de Adminsitración de Portales";


class direccion {
    public $ubicacion1;
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

class equipo {
    public $tipo;
}

$equipo1 = new equipo;
$equipo1->tipo = "All In One";

$equipo2 = new equipo;
$equipo2->tipo = "Pc";

$equipo3 = new equipo;
$equipo3->tipo = "Laptop";

?>

<form action="/solicitud" method="POST">
    @csrf
	<br>
	<br>
		<div class="container">
		<h4>SOLICITUD DE ALTA SERVICIOS INTERNOS DE TICS USUARIOS EXTERNOS EN EL SIGTIC.</h4>
		<h5>Ciudad de México a <?php echo date("j-m-Y"); ?> </h5>
		<br>
		<hr class="red">
	    </div>

	<!--Autorizadores-->
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header" name="datos_solicitante">
						<h3>Autorizadores de la solicitud</h3>
					</div>
				</div>
			</nav>
			<br>
			<div class="row">
				<div class="col-md-4"><strong>Nombre del director o subdiector:</strong></div>
				<div class="col-md-8">
					<select name="autorizadores" id="auto_id" required>
						<option value="autorizador1">Ing. Mario César Herrera González</option>
						<option value="autorizador2">Ing. José Antonio Rulfo Zaragoza</option>
						<option value="autorizador3">Mtra. Edna Patricia Santiago Vargas</option>
						<option value="autorizador4">Subdirector de Innovación Tecnológica</option>
						<option value="autorizador5">Subdirectora de Adminsitración de Portales</option>
					</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4"><strong>Dirección o subdireción:</strong></div>
				<div class="col-md-8">
					<select name="puestos" id="auto_id" required>
						<option value="puesto1">Director Coordinador de Innovación y Desarrollo Tecnológico</option>
						<option value="puesto2">Director de Desarrollo Tecnológico</option>
						<option value="puesto3">Subdirectora de Sistemas Administrativos</option>
						<option value="puesto4">Ing. David de León Muñoz</option>
						<option value="puesto5">Ing. Iracema Mirón Ramírez</option>
					</select>
				</div>
			</div>
	</div>
	<br>
	<br>
	<!--Fin del bloque de los Autorizadores-->



	<!--Información del usuario a registrar-->
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header" name="datos_solicitante">
					<h4>Información del usuario a registrar:</h4>
				</div>
			</div>
		</nav>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Apellido paterno:</strong></div>
			<div class="col-md-3">
				<input
					class="border-success"
					id="apellido_paterno"
					name="apellido_paterno"
					type="text"
					placeholder=" Tu apellido paterno "
					value="{{old ('apellido_paterno')}}"
					/>
			</div>
			<div class="col-md-3"><strong>Apellido materno:</strong></div>
			<div class="col-md-3">
				<input
					class="border-success"
					id="apellido_materno"
					name="apellido_materno"
					type="text"
					placeholder=" Tu apellido materno "
					value="{{old ('apellido_materno')}}"
				/>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Nombre(s):</strong></div>
			<div class="col-md-3">
				<input
                	class="border border-success"
                	id="name"
                	name="name"
                	type="text"
                	placeholder=" Tu nombre "
                	value="{{old ('name')}}"
                />
			</div>
			<br>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Ubicación en la SICT:</strong></div>
			<div class="col-md-3">
				<select name="ubicacion" id="ubicacion_id" required>
					<option value="ubicacion1"> Av. Insurgentes Sur 1089, Col. Nochebuena, Benito Juárez, 3720, CDMX. Piso 8 </option>
					<option value="ubicacion2"> Av. Insurgentes Sur 1089, Col. Nochebuena, Benito Juárez, 3720, CDMX. Piso 9 </option>
				</select>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Empresa:</strong></div>
			<div class="col-md-4">
				<select name="empresa" id="empresa_id" required>
					<option value="empresa1"> Electronica Sacachispas S.A de C.V </option>
                	<option value="empresa2"> Patito S.A. de C.V </option>
				</select>
			</div>
			<div class="col-md-2"><strong>Contrato</strong></div>
			<div class="col-md-2">
				<select name="contrato" id="contrato" required>
					<option value="contrato1"> MVC-4589 </option>
                	<option value="empresa2"> BBC-3789 </option>
				</select>
			</div><br>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Funciones:</strong></div>
			<div class="col-md-3">
				<input
					class="border-success"
					id="funciones"
					name="funciones"
					type="text"
					placeholder=" Funciones"
					value="{{old ('funciones')}}"
				/>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Servicios requeridos:</strong></div>
			<div class="col-sm-3"><input type="checkbox" name="dir_activo" value="dir_activo"> Usuario directorio Activo</div>
			<div class="col-sm-3"><input type="checkbox" name="ip_fija" value="ip_fija"> Ip fija</div>
			<div class="col-sm-3"><input type="checkbox" name="internet" value="internet"> Internet</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Nombre del sistema:</strong></div>
			<div class="col-md-9"><strong>Nivel de permisos:</strong></div>
		</div>
		<br>
		<br>
	</div>
	<!--Fin del bloeque de información del usuario a registrar-->


	<!--Información del equipo-->
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header" name="datos_solicitante">
					<h4>Información del equipo a asignar y/o registrar:</h4>
				</div>
			</div>
		</nav>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Tipo del equipo:</strong></div>
			<div class="col-md-2">
				<select name="equipo" id="equipo_id" required>
					<option value="equipo1"> All In One </option>
					<option value="equipo2"> PC </option>
					<option value="equipo3"> Laptop </option>
				</select>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Marca:</strong></div>
			<div class="col-md-3">
				<input
					class="border-success"
					id="marca"
					name="marca"
					type="text"
					placeholder=" Marca "
					value="{{old ('marca')}}"
				/>
			</div>
			<div class="col-md-3"><strong>Modelo:</strong></div>
			<div class="col-md-3">
				<input
					class="border-success"
					id="modelo"
					name="modelo"
					type="text"
					placeholder=" Modelo "
					value="{{old ('modelo')}}"
				/>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Serie:</strong></div>
			<div class="col-md-3">
				<input
					class="border-success"
					id="serie"
					name="serie"
					type="text"
					placeholder=" Serie "
					value="{{old ('modelo')}}"
				/>
			</div>
			<div class="col-md-3"><strong>MAC:</strong></div>
			<div class="col-md-3">
				<input
					class="border-success"
					id="mac"
					name="mac"
					type="text"
					placeholder=" MAC "
					value="{{old ('mac')}}"
				/>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>IP Antigua:</strong></div>
			<div class="col-md-3">
				<input
					class="border-success"
					id="ip_antigua"
					name="ip_antigua"
					type="text"
					placeholder=" IP Antigua "
					value="{{old ('ip_antigua')}}"
				/>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Propiedad de la SICT:</strong></div>
			<div class="col-sm-1"><input type="radio" name="equipo_sict" value="uda"> Sí</div>
			<div class="col-sm-1"><input type="radio" name="equipo_propio" value="ip"> No</div>
			<div class="col-md-3"><strong>Nombre del propietario</strong></div>
			<div class="col-md-3"><input type="text"></div>
		</div>
		<br>
		<br>
	</div>
	<!--Fin del bloeque de información del usuario a registrar-->

	<div class="container">
		<button class="btn btn-primary btn-lg active" type="submit">Enviar solicitud</button>
	</div>
	<br>
	<br>
	<div class="container">
		<button 
			href="{{ URL::to('/solicitud/download-pdf') }}" 
			class="btn btn-secundary btn-lg active" 
			type="submit"
		>
		Previsualizar solicitud
		</button>
	</div>
	<br>
	<br>
</form>
@endsection
