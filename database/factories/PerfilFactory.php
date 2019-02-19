<?php

use Faker\Generator as Faker;
use App\Sexo;
use App\Cargo;
use App\Entidad;
use App\User;

$factory->define(App\Perfil::class, function (Faker $faker) {
    return [
        'nombres' => $faker->name,
        'apellidos' => $faker->lastName,
        'sexo_id' => function () {
            return factory(Sexo::class)->create()->id;
        },
        'cargo_id' => function () {
            return factory(Cargo::class)->create()->id;
        },
        'entidad_id' => function () {
            return factory(Entidad::class)->create()->id;
        },
        'user_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
