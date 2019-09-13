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
     'data' => [
         "celular" => $faker->phoneNumber,
         "telefono" => $faker->tollFreePhoneNumber,     
         "mision" => $faker->paragraph,
         "vision" => $faker->paragraph,
         "ciudad" => $faker->city
     ],
     'estado' => 1
    ];
});
