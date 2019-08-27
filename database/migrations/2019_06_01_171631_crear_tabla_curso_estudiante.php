<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCursoEstudiante extends Migration
{
    
    public function up()
    {
        Schema::create('cursos_estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_inicial');
            $table->date('fecha_final');
            $table->integer('valor');
            $table->integer('curso_id')->unsigned();
            $table->integer('estudiante_id')->unsigned();
            $table->integer('estado');
            $table->foreign('curso_id')->references('id')
            ->on('cursos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estudiante_id')->references('id')
            ->on('estudiantes')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('cursos_estudiantes');
    }
    
}
