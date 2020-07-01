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
        $role = array_rand(array('user','admin'));

        for($i = 0; $i < 500; $i++){

            \App\User::create([
                'firstName' => $faker->name,
                'lastName' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => $password,
                'phone' => $faker->e164PhoneNumber,
                'address' => $faker->address,
                'role' => $role,
                'email_verified_at' => $faker->dateTimeThisYear($max = 'now', $timezone = 'Africa/Lagos'),
                'remember_token' => $faker->regexify('[A-Za-z0-9]{40}')
            ]);
        }
    }
}
