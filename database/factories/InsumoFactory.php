<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use restaurapp\Insumo;
use Faker\Generator as Faker;

$factory->define(Insumo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'stock' => rand(20,30),
        'precio_compra' => '$8000',
    ];
});
