<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\User::class,10)->create();
    }
}
