<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Colegio;
use Faker\Generator as Faker;

$factory->define(Colegio::class, function (Faker $faker) {
    return [
     'nombre_colegio' => $faker->company,
     'tipo_colegio' => $faker->word,
     'direccion' => $faker->address,
     'correo' => $faker->safeEmail,
     'contacto' => $faker->phoneNumber,
     'estado' => 1
    ];
});
