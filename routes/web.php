<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('profile', ProfileController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::get('transaction/buy', [TransactionController::class, 'buy'])->name('transaction.buy');
    Route::get('transaction/sell', [TransactionController::class, 'sell'])->name('transaction.sell');
    Route::resource('transaction', TransactionController::class)->except(['index', 'show']);

    Route::name('ajax.')->prefix('ajax')->group(function() {
        Route::post('stock-remaining', [AjaxController::class, 'getUsersRemainingStock'])->name('stock.remaining');
        Route::get('get-portfolios', [DashboardController::class, 'getPortfolios'])->name('dashboard.portfolio');
    });

});


// Static pages route
Route::get('{page}', [PageController::class, 'page'])->name('page')->where('page', 'contact|terms|faq');
