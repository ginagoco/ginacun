<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCurso extends Migration
{
    
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_curso',150);
            $table->string('descripcion', 250);
            $table->string('grado',100);
            $table->integer('estado');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
