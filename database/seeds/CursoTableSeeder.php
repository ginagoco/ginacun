<?php

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoTableSeeder extends Seeder
{

    public function run()
    {
        Curso::create([
           'nombre_curso' => 'Matematicas',
           'descripcion' => 'Curso de aprendizaje de matemaricas basica',
           'grado' => 'Primaria',
           'estado' => 1

        ]);

        Curso::create([
           'nombre_curso' => 'Naturales',
           'descripcion' => 'Curso de aprendizaje de ciencias naturales',
           'grado' => 'Primaria',
           'estado' => 1

        ]);

        Curso::create([
           'nombre_curso' => 'Sociales',
           'descripcion' => 'Curso de aprendizaje de ciudadania',
           'grado' => 'Primaria',
           'estado' => 1

        ]);
    }
}
