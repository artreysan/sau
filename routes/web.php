<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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

Route::get('/crear', [RegisterController::class,'index']);
Route::post('/crear', [RegisterController::class,'store']);

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);

Route::get('/logout', [LogoutController::class,'store'])->name('logout');

Route::get('/muro', [PostController::class,'index'])->name('post.index');

Route::get('/solicitud', [SolicitudesController::class,'index']);
Route::post('/solicitud', [SolicitudesController::class,'crear']);

//Download pdf
Route::get('/solicitud/download-pdf', [SolicitudesController::class, 'downloadPdf']);
//Send Mail
Route::get('/solicitud/sendMail', [SolicitudesController::class, 'sendMail']);

Route::post('/solicitud', [SolicitudesController::class,'store']);

