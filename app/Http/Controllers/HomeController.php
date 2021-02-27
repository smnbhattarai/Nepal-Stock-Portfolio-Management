<?php

namespace App\Http\Controllers;

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
        $portfolios = auth()->user()->portfolios()->with('stock')->get()->sortBy('stock.name');
        return view('dashboard', compact('portfolios'));
    }

}
