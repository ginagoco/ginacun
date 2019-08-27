<?php

use Illuminate\Database\Seeder;

class EstudianteTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(App\Models\Colegio::class,5)
        ->create()
        ->each(function ($colegio){
        	$colegio->estudiantes()->save(factory(App\Models\Estudiante::class)->make());
        });


    }
}
