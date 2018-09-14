<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idvehiculo');
            $table->foreign('idvehiculo')->references('id')->on('vehiculo');
            $table->unsignedInteger('idpersona');
            $table->foreign('idpersona')->references('id')->on('persona');
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
