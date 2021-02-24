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
    public function index()
    {
        $transactions = Transaction::with('stock')->where('user_id', auth()->id())->orderBy('id', 'desc')->get();
        return view('transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        return redirect()->route('transaction.index')->withSuccess($message);

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
        return redirect()->route('transaction.index')->withSuccess('Transaction deleted!');
    }
}
