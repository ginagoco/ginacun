<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Estudiante;
use Faker\Generator as Faker;

$factory->define(Estudiante::class, function (Faker $faker) {
    return [
     'tipo_documento' => $faker->randomElement($array = array ('CC','TI')),
     'documento' => $faker->unique()->numberBetween($min = 100000000, $max = 200000000),
     'nombre' => $faker->name,
     'apellido' => $faker->lastName,
     'genero' =>$faker->randomElement($array = array ('F','M')),
     'edad' => $faker->numberBetween($min = 6, $max = 12),
     'contacto' => $faker->phoneNumber,
     'grado' => $faker->title,
     'clave' => $faker->word,
     'colegio_id' => function () {
     	return factory(App\Models\Colegio::class)->create()->id;
     },
     'estado' => 1
     
    ];
});
