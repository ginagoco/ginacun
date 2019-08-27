<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaColegio extends Migration
{
    
    public function up()
    {
        Schema::create('colegios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_colegio',250);
            $table->string('tipo_colegio',250);
            $table->string('direccion',255);
            $table->string('correo',255);
            $table->string('contacto',50);
            $table->integer('estado');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('colegios');
    }
}
