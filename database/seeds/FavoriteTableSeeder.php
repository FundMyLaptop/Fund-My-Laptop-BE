<?php

use Illuminate\Database\Seeder;

class FavoriteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'user_id','request_id'
         \App\Favorite::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 1500; $i++){
            \App\Favorite::create([
            	'user_id' => $faker->numberBetween($min = 1, $max = 1500),
                'request_id' => $faker->numberBetween($min = 1, $max = 1500),
            ]);
        }
    }
}
