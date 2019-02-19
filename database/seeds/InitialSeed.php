<?php

use Illuminate\Database\Seeder;
use App\Cargo;
use App\User;
use App\Perfil;

class InitialSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)
        ->create()
        ->each(function ($user) {
            $user->perfil()->save(factory(Perfil::class)->make([
                'user_id' => $user->id
            ]));
        });
    }
}
