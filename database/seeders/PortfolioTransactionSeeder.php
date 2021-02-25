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

        for($i = 0; $i < 100; $i++) {
            $user_id = rand(1, 3);
            $stock_id = rand(1, 179);
            $p = Portfolio::where('user_id', $user_id)->where('stock_id', $stock_id)->first();
            if(!$p) Portfolio::create([
                'user_id' => $user_id,
                'stock_id' => $stock_id,
                'description' => ucfirst($faker->words(rand(3, 6), true))
            ]);
        }

        for($i = 0; $i < 500; $i++) {
            $user_id = rand(1, 3);
            $stock = Portfolio::where('user_id', $user_id)->inRandomOrder()->first();
            $stock_id = $stock->stock_id;
            $type = rand(1, 2);
            $quantity = rand(10, 10000);
            $price = rand(135, 3500);
            $date = $faker->date("Y-m-d", 'now');
            $commission = ($type == 2) ? (0.35 * $quantity * $price) / 100 : 0;
            Transaction::create([
                'user_id' => $user_id,
                'stock_id' => $stock_id,
                'type' => $type,
                'quantity' => $quantity,
                'price' => $price,
                'date' => $date,
                'commission' => $commission,
            ]);
        }

    }
}
