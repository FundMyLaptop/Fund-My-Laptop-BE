<?php

use Illuminate\Database\Seeder;

class AccrualsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Accrual::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 1500; $i++){
            \App\Accrual::create([
                'request_id' => $faker->numberBetween($min = 1, $max = 1500),
                'rate' => 200,
                'amount' => $faker->randomNumber(6),
            ]);
        }
    }
}
