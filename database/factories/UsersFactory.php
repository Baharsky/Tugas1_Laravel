<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        
    	'username' => $faker->name,
        'password' => bcrypt('P@ssw0rd'),
        'role' => $faker->numberBetween(1,2)
    ];
});
