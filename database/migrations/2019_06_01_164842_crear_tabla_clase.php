<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaClase extends Migration
{
    
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_clase', 150);
            $table->integer('orden');
            $table->time('horario');
            $table->integer('estado');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('clases');
    }
}
