<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function getPortfolios()
    {

        $transactions = Transaction::with('stock')->where('user_id', auth()->id())->get();
        $res = [];
        $stocks_remaining = [];
        $stock_details = [];
        foreach ($transactions as $transaction) {
            $qty = $transaction->quantity;
            $type = $transaction->type;
            if($type == 2) $qty = -$qty;
            $stock_details[$transaction->stock->symbol][] = $qty;
        }

        foreach ($stock_details as $scrip => $quantity) {
            $remaining = array_sum($quantity);
            if($remaining > 0) $res[$scrip] = $remaining;
        }

        return response()->json(['data' => $res]);

    }
}
