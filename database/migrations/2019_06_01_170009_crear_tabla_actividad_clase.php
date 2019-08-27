<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaActividadClase extends Migration
{
    
    public function up()
    {
        Schema::create('actividades_clases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('clase_id')->unsigned();
            $table->integer('estado');
            $table->foreign('actividad_id')->references('id')
            ->on('actividades')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('clase_id')->references('id')
            ->on('clases')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('actividades_clases');
    }
}
