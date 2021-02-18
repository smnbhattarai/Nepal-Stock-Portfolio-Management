<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use App\Models\Stock;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('portfolio.index');
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return $this->edit(new Portfolio());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioRequest $request)
    {
        return $this->save($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * @param Portfolio $portfolio
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Portfolio $portfolio)
    {
        $stocks = Stock::all(['id', 'symbol', 'name']);
        return view('portfolio.form', compact('portfolio', 'stocks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(PortfolioRequest $request, Portfolio $portfolio)
    {
        //
    }

    public function save($request, $portfolio = null)
    {
        if ($portfolio) {
            $message = "Portfolio updated Successfully.";
        } else {
            $portfolio = new Portfolio();
            $message = "Portfolio created Successfully.";
        }

        $portfolio->user_id = auth()->id();
        $portfolio->stock_id = $request->symbol;
        $portfolio->description = $request->description;

        $portfolio->save();

        return redirect()->route('portfolio.index')->withSuccess($message);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
