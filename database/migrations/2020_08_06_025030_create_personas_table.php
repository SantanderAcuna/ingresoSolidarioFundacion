<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hogar_final');
            $table->string('identificacion');
            $table->string('pri_nombre');
            $table->string('seg_nombre');
            $table->string('pri_apellido');
            $table->string('seg_apellido');
            $table->string('telefono');
            $table->bigInteger('barrio_id')->unsigned();
            $table->string('direccion');
            $table->bigInteger('banco_id')->unsigned();
            $table->bigInteger('tipo_id')->unsigned();
            $table->string('ncuenta');
            $table->foreign('barrio_id')->references('id')->on('barrios');
            $table->foreign('banco_id')->references('id')->on('bancos');
            $table->foreign('tipo_id')->references('id')->on('tipo_cuentas');
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
        Schema::dropIfExists('personas');
    }
}
