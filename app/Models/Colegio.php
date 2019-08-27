<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    protected $table = 'colegios';

    protected $fillable = [
     'nombre_colegio',
     'tipo_colegio',
     'direccion',
     'correo',
     'contacto',
     'estado'
    ];

    public function estudiantes(){
    	return $this->hasMany('App\Models\Estudiante');
    }

}
