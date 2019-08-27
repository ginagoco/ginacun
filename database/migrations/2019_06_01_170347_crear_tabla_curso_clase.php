<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCursoClase extends Migration
{
    
    public function up()
    {
        Schema::create('cursos_clases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('curso_id')->unsigned();
            $table->integer('clase_id')->unsigned();
            $table->integer('estado');
            $table->foreign('curso_id')->references('id')
            ->on('cursos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('clase_id')->references('id')
            ->on('clases')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('cursos_clases');
    }
}
