<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'user_id', 'title', 'category', 'image', 'post'
        \App\Blog::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 1500; $i++){
            \App\Blog::create([
                'user_id' => $faker->numberBetween($min = 1, $max = 500),
                'title' => $faker->text($maxNbChars = 50),
                'category' => $faker->text($maxNbChars = 50),
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'post' => $faker->text($maxNbChars = 500),
            ]);
        }
    }
}
