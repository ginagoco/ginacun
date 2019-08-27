<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaActividad extends Migration
{
    
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_actividad', 150);
            $table->string('archivo', 500);
            $table->string('tipo_archivo', 250);
            $table->string('ruta', 500);
            $table->string('categoria', 250);
            $table->string('proceso', 250);
            $table->integer('tiempo');
            $table->integer('orden');
            $table->integer('estado');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('actividades');
    }

}
