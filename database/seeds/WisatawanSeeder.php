<?php

use Illuminate\Database\Seeder;
use App\Wisatawan;
use Faker\Factory as Faker;


class WisatawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Factory(App\Wisatawan::class,10)->create();

   //  	for ($i = 1; $i <= 50; $i++) { 
 
    	

   //      DB::table('wisatawan')->insert([
   //      	'nama' => $faker->name,
			// 'gender' => $faker->teks,
			// 'umur' => $faker->numberBetween(18,40),
			// 'asal' => $faker->address,
			// 'foto' => $faker->imageUrl      	
   //      ]);
   //  	}
    }
}
