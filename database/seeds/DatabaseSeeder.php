<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PariwisataSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(WisatawanSeeder::class);
    }
}
