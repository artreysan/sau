<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id();
            $table->char('nombre', 100);
            $table->char('apellido_paterno', 100);
            $table->char('apellido_materno', 100)->nullable();
            $table->string('emailSend')->after('apellido_materno');
            $table->unsignedInteger('userID');
            $table->string('fileID')->nullable()->unique();
            $table->unsignedInteger('startTime');
            $table->string('autorizador', 100);
            $table->string('puesto', 100);
            $table->string('empresa', 100);
            $table->string('direccion', 100);
            $table->string('contrato', 100);
            $table->string('funcion', 100);
            $table->string('tipo_equipo', 50);
            $table->char('vpn', 2);
            $table->char('ip_fija', 2);
            $table->char('internet', 2);
            $table->char('gitlab', 2);
            $table->char('jira', 2);
            $table->char('glpi', 2);
            $table->string('marca', 50);
            $table->string('modelo', 50);
            $table->string('serie', 50);
            $table->string('mac', 50);
            $table->ipAddress('ip_antigua');
            $table->char('equipo_propio', 100)->nullable();;
            $table->char('equipo_sict', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('solicituds');

    }
};
