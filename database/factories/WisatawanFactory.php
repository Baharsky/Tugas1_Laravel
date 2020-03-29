<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Wisatawan;
use Faker\Generator as Faker;

$factory->define(Wisatawan::class, function (Faker $faker) {


$faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));

    return [
        'nama' => $faker->name,
        'gender' => $faker->randomElement(['Laki-laki', 'Perempuan']),
        'umur' => $faker->numberBetween(10,40),
        'asal' => $faker->city,
        'foto' => $faker->imageUrl(500)
    ];
});
