<?php

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
    Route::resource('transaction', TransactionController::class);

});


// Static pages route
Route::get('{page}', [PageController::class, 'page'])->name('page')->where('page', 'contact|terms|faq');
