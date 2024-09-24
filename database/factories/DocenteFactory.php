<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'apellido_nombre' => Str::random(10),
        'ci' => Str::random(10),
        'edad' => '22',
        'direccion' => Str::random(20),
        'telefono' => random_int(70000000,70000010),
        'carnet' => Str::random(10),
        'formacion_profecional' => Str::random(10),
    ];
});
