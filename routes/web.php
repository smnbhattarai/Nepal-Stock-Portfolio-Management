<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

});


// Static pages route
Route::get('{page}', [PageController::class, 'page'])->name('page')->where('page', 'contact|terms|faq');
