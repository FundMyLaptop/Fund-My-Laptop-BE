<?php

use Illuminate\Database\Seeder;

class RequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'user_id','title','description','photoURL','currency','amount','isFunded','isSuspended','isActive'
        \App\Request::truncate();
        $faker = \Faker\Factory::create();
        $cur = array_rand(array('NGN','USD', 'EUR'));
        for($i = 0; $i < 1500; $i++){
            \App\Request::create([
                'user_id' => $faker->numberBetween($min = 1, $max = 500),
                'title' => $faker->text($maxNbChars = 100),
                'description' => $faker->text($maxNbChars = 150),
                'photoURL' => $faker->imageUrl($width = 640, $height = 480),
                'currency' => $cur,
                'amount' => $faker->randomNumber(6),
                'isFunded' => $faker->boolean($chanceOfGettingTrue = 50),
                'isSuspended' => $faker->boolean($chanceOfGettingTrue = 50),
                'isActive' => $faker->boolean($chanceOfGettingTrue = 50),
            ]);
        }
    }
}
