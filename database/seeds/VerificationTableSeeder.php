<?php

use Illuminate\Database\Seeder;

class VerificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'user_id','photoURL','videoURL','status'
        \App\Verification::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 1500; $i++){
            \App\Verification::create([
                'user_id' => $faker->numberBetween($min = 1, $max = 500),
                'photoURL' => $faker->imageUrl($width = 640, $height = 480),
                'videoURL' => $faker->imageUrl($width = 640, $height = 480),
                'status' => $faker->boolean($chanceOfGettingTrue = 50),
            ]);
        }
    }
}
