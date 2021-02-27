<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Site index page. The welcome page
     * @return \Illuminate\Contracts\View\View
     */
    public function welcome()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        $total_buy = Transaction::where('user_id', auth()->id())->where('type', 1)->sum('price');
        $total_sell = Transaction::where('user_id', auth()->id())->where('type', 2)->sum('price');
        $portfolios = auth()->user()->portfolios()->with('stock')->get()->sortBy('stock.name');
        return view('dashboard', compact('portfolios', 'total_buy', 'total_sell'));
    }

}
