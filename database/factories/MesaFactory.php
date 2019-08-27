<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use restaurapp\Mesa;
use Faker\Generator as Faker;

$factory->define(Mesa::class, function (Faker $faker) {
    return [
        'capacidad_personas' => rand(1,4),
        'activo' => 1,
    ];
});
