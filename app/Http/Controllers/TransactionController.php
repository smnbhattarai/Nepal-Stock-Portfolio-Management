<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Portfolio;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buy()
    {
        $transactions = Transaction::with('stock')
            ->where('user_id', auth()->id())
            ->where('type', 1)
            ->orderBy('id', 'desc')
            ->get();
        return view('transaction.buy', compact('transactions'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sell()
    {
        $transactions = Transaction::with('stock')
            ->where('user_id', auth()->id())
            ->where('type', 2)
            ->orderBy('id', 'desc')
            ->get();
        return view('transaction.sell', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!auth()->user()->portfolios()->count()) return redirect()->route('portfolio.create')->withInfo("Please add portfolio first.");

        return $this->edit(new Transaction());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionRequest $request)
    {
        return $this->save($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        $portfolios = Portfolio::with('stock')->where('user_id', auth()->id())->get();
        return view('transaction.form', compact('transaction', 'portfolios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionRequest $request, Transaction $transaction)
    {
        return $this->save($request, $transaction);
    }

    public function save($request, $transaction = null)
    {
        if ($transaction) {
            $message = "Transaction updated Successfully.";
        } else {
            $transaction = new Transaction();
            $transaction->stock_id = $request->stock;
            $transaction->type = $request->type;
            $message = "Transaction added Successfully.";
        }

        $transaction->user_id = auth()->id();
        $transaction->quantity = $request->quantity;
        $transaction->price = $request->price;
        $transaction->date = $request->date;
        $transaction->commission = $request->commission;

        $transaction->save();

        $redirect = 'transaction.buy';
        if($transaction->type == 2) $redirect = 'transaction.sell';

        return redirect()->route($redirect)->withSuccess($message);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->to(request()->headers->get('referer'))->withSuccess('Transaction deleted!');
    }
}
