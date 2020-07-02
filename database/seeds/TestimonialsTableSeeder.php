<?php

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Testimonial::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 500; $i++){
            \App\Testimonial::create([
                'user_id' => $faker->numberBetween($min = 1, $max = 500),
                'testimonial' => $faker->text($maxNbChars = 200),
            ]);
        }
    }
}
