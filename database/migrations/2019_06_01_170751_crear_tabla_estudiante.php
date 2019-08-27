<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEstudiante extends Migration
{

    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_documento', 15);
            $table->integer('documento')->unique();
            $table->string('nombre', 150);
            $table->string('apellido', 150);
            $table->char('genero', 2);
            $table->integer('edad');
            $table->string('contacto', 150);
            $table->string('grado', 150);
            $table->integer('colegio_id')->unsigned();
            $table->string('clave', 250);
            $table->integer('estado');
            $table->foreign('colegio_id')->references('id')
            ->on('colegios')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
