<?php
use App\Transaction;
use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $status = ['success', 'failed'];
        $response_code = [201, 404];

        $faker = Faker\Factory::create();
        for ($i = 0; $i < 1000; $i++) {
            $rand_index = array_rand($status);
            $transaction = new Transaction();

            $transaction->user_id = $faker->numberBetween(1, 450);
            $transaction->request_id = $faker->numberBetween(1, 1200);
            $transaction->transaction_ref = $faker->randomLetter . '_' . $faker->numberBetween(5000, 6000);
            $transaction->amount = $faker->randomNumber(5);
            $transaction->status = $status[$rand_index];
            $transaction->response_code = $response_code[$rand_index];
            $transaction->save();
        }
    }
}
