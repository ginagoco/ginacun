<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';

    protected $fillable = [
     'tipo_documento',
     'documento',
     'nombre',
     'apellido',
     'genero',
     'edad',
     'contacto',
     'grado',
     'colegio_id',
     'clave',
     'estado'
    ];

    public function colegio(){
    	return $this->belongsTo('App\Models\Colegio');
    }

}
