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
     'data',
     'estado'
    ];

    protected $casts = [
        'data' => 'array',
    ];

    
    public function estudiantes()
    {
    	return $this->hasMany('App\Models\Estudiante');
    }

    public function getListEstudianteAttribute()
    {
        return $this->estudiantes;
    }

    public function getNombreTipoAttribute()
    {
        return "Institucion: {$this->nombre_colegio} - Tipo Institucion: {$this->tipo_colegio}";
    }

    
    public function setNombreColegioAttribute($value)
    {
        $this->attributes['nombre_colegio'] = strtolower($value);
    }

    protected $appends = ['nombre_tipo', 'list_estudiante'];


}
