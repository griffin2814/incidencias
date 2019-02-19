<?php

use Faker\Generator as Faker;
use App\Modulo;
use App\TipoIncidencia;
use App\User;

$factory->define(App\Incidencia::class, function (Faker $faker) {
    return [
        'titulo' => $faker->title,
        'descripcion' => $faker->words(20),
        'modulo_id' => function () {
            return factory(Modulo::class)->create()->id();
        },
        'tipo_incidencia_id' => function () {
            return factory(TipoIncidencia::class)->create()->id;
        },
        'user_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
