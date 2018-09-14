<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CretePersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('uusario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->date('FechaN');
            $table->string('Identificacion');
            $table->string('Profesion');
            $table->boolean('casado');
            $table->double('IngresoMensual', 8);
            $table->unsignedInteger('idvehiculo');
            $table->foreign('idvehiculo')->references('id')->on('vehiculo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
