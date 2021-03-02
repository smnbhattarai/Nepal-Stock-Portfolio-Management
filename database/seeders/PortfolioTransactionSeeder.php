<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use App\Models\Transaction;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PortfolioTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 15; $i++) {
            $user_id = rand(1, 3);
            $stock_id = rand(1, 179);
            $p = Portfolio::where('user_id', $user_id)->where('stock_id', $stock_id)->first();
            if(!$p) Portfolio::create([
                'user_id' => $user_id,
                'stock_id' => $stock_id,
                'description' => ucfirst($faker->words(rand(3, 6), true))
            ]);
        }

        for($i = 0; $i < 1000; $i++) {
            $user_id = rand(1, 3);
            $stock = Portfolio::where('user_id', $user_id)->inRandomOrder()->first();
            $stock_id = $stock->stock_id;
            $type = 1;
            $quantity = rand(10, 100);
            $price = rand(135, 2500);
            $date = $faker->date("Y-m-d", 'now');
            $commission = ($type == 2) ? (0.35 * $quantity * $price) / 100 : 0;
            Transaction::create([
                'user_id' => $user_id,
                'stock_id' => $stock_id,
                'type' => $type,
                'quantity' => $quantity,
                'price' => $price * $quantity,
                'date' => $date,
                'commission' => $commission,
            ]);
        }

        $transactions = Transaction::all();
        foreach ($transactions as $transaction) {
            $q = round(rand(1, 50) / 100 * $transaction->quantity);
            $p = rand(135, 2500);
            Transaction::create([
                'user_id' => $transaction->user_id,
                'stock_id' => $transaction->stock_id,
                'type' => 2,
                'quantity' => $q,
                'price' => $p * $q,
                'date' => $faker->date("Y-m-d", 'now'),
                'commission' => (0.35 * $q * $p) / 100,
            ]);
        }

    }
}
