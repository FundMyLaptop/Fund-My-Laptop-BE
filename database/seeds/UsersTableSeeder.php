<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();
        $faker = \Faker\Factory::create();
        $password = Hash::make('test123');
        $roles = array('user','admin');

        for($i = 0; $i < 500; $i++){
            $role = $roles[mt_rand(0,count($roles) - 1)];
            \App\User::create([
                'firstName' => $faker->name,
                'lastName' => $faker->name,
                'email' => $faker->safeEmail,
                'password' => $password,
                'phone' => $faker->e164PhoneNumber,
                'address' => $faker->address,
                'role' => $role,
                'email_verified_at' => $faker->dateTimeThisYear($max = 'now', $timezone = 'Africa/Lagos'),
                'remember_token' => Str::random(40),
            ]);
        }
    }
}
