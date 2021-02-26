<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Get user's remaining stock
     * Used in Transaction page
     */
    public function getUsersRemainingStock(Request $request)
    {
        $stock_id = $request->stock_id;
        $transactions = Transaction::where('user_id', auth()->id())->where('stock_id', $stock_id)->get();
        $stocks_remaining = [0];
        foreach ($transactions as $transaction) {
            $qty = $transaction->quantity;
            $type = $transaction->type;
            if($type == 2) $qty = -$qty;
            $stocks_remaining[] = $qty;
        }
        return response()->json(['data' => array_sum($stocks_remaining)]);
    }
}
