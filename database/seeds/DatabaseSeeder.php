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
        $this->call(AccrualsTableSeeder::class);
        $this->call(BlogsSeeder::class);
        $this->call(FavoriteTableSeeder::class);
        $this->call(RecommendationTableSeeder::class);
        $this->call(RequestsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VerificationTableSeeder::class);
        $this->call(TransactionTableSeeder::class);
    }
}
