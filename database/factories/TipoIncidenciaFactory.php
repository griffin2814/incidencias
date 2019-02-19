<?php

use Faker\Generator as Faker;

$factory->define(App\TipoIncidencia::class, function (Faker $faker) {
    return [
        'tipo' => $faker->word
    ];
});
