<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::controller(OrderController::class)->middleware(['auth'])->prefix('orders')->name('orders.')->group(function(){
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

Route::controller(UserController::class)->middleware(['auth'])->prefix('users')->name('users.')->group(function(){
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/auth.php';
