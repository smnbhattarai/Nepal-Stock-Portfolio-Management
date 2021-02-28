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
        $portfolios = Portfolio::with('stock')->where('user_id', auth()->id())->get(['id', 'user_id', 'stock_id', 'description', 'created_at']);
        return view('portfolio.index', compact('portfolios'));
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
        if($portfolio->exists) $this->authorize('update', $portfolio);

        $userStocks = auth()->user()->portfolios;

        $stocks = [];
        foreach ($userStocks as $userStock) {
            $stocks[] = $userStock->stock_id;
        }

        $stocks = Stock::whereNotIn('id', $stocks)->get(['id', 'symbol', 'name']);
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
        $this->authorize('update', $portfolio);

        return $this->save($request, $portfolio);
    }

    public function save($request, $portfolio = null)
    {
        if ($portfolio) {
            $message = "Portfolio updated Successfully.";
        } else {
            $portfolio = new Portfolio();
            $message = "Portfolio added Successfully.";
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
        $this->authorize('delete', $portfolio);

        $portfolio->delete();
        return redirect()->route('portfolio.index')->withSuccess('Portfolio deleted!');
    }
}
