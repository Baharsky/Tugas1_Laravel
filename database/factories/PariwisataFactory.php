<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pariwisata;
use Faker\Generator as Faker;

$factory->define(Pariwisata::class, function (Faker $faker) {
    return [
        
        'nama_par' => $faker-> name,
        'lokasi_par' => $faker-> address,
        'detail_par' => $faker-> text,
        'foto_par' => $faker->randomElement(['PAR-Arjuno.jpg', 'PAR-Bromo.jpg'])

    ];
});
