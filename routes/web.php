<?php

//Importar controladores para las rutas
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EditarSolicitudController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MostrarController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SolicitudesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

//Crea un usuario enviando primero al formulario y despues a la DB
Route::get('/crear', [RegisterController::class,'index']);
Route::post('/crear', [RegisterController::class,'store']);

//Ingreso al sistema SAU con validacion 
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);

//Salida del sistema SAU
Route::get('/logout', [LogoutController::class,'store'])->name('logout');

//ingreso al dashborad de las solicitudes
Route::get('/muro', [PostController::class,'index'])->name('post.index');




//Bloque de rutas con el controlador de soicitudes
//Todas funciones llaman al controlador de soicitudes dependiendo sus funciones
//Ruta pendiente para editar solicitud

//Mostrar formulario y enviar solicitud (envio de email en automatico)
Route::get('/solicitud', [SolicitudesController::class,'index']);
Route::post('/solicitud/save', [SolicitudesController::class,'crear']);


Route::get('/editar', [SolicitudesController::class,'editar']);

//Mostrar formato de solicitudes y formato.
Route::get('/mostrar/{fileID}', [SolicitudesController::class,'show']);

//Download pdf
Route::get('/solicitud/download-pdf', [SolicitudesController::class, 'downloadPdf']);

//Gernera PDF
Route::get('/muro/stream-pdf/{fileID}', [SolicitudesController::class, 'streamPDF']);

//Send Mail
Route::get('/solicitud/sendMail', [SolicitudesController::class, 'sendMail']);







