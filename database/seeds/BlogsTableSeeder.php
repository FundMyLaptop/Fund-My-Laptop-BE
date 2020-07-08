<?php

use Illuminate\Database\Seeder;
use App\Blog;
class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            
      $status = ['success', 'failed'];
      $response_code = [201, 404];
    
            $faker = Faker\Factory::create();
            for ($i = 0; $i < 1000; $i++) {
                $rand_index = array_rand($status);
                $blog = new Blog();
                $blog->user_id = $faker->numberBetween(1, 450);
                $blog->title = $faker->words($nb = 6, $asText = true);
                $blog->body = $faker->text($maxNbChars = 2000);
                $blog->category = $faker->word;
              $blog->save();
                
            }
        
    }
}
