<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistemas extends Model
{
    use HasFactory;
    protected $table = 'sistemas';

    protected $fillable = [
        'idUsuario',
        'idEquipo',
        'cuentaDirectorioActivo',
        'nombreCompletoSistema',
        'nombreCortoSistema',
        'ipOrigen',
    ];
}
