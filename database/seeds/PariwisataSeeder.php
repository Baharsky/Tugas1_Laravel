<?php

use Illuminate\Database\Seeder;

use App\Pariwisata;
use Faker\Factory as Faker;


class PariwisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Pariwisata::class,10)->create();
    }
}
