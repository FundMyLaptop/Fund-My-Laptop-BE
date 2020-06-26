<?php

use Illuminate\Database\Seeder;

class RecommendationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'user_id','statement'
         \App\Recommendation::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 1500; $i++){
            \App\Recommendation::create([
                'user_id' => $faker->numberBetween($min = 1, $max = 500),
                'statement' => $faker->text($maxNbChars = 150),
            ]);
        }
    }
}
