<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FedController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/feds', [FedController::class, 'store'])->name('feds.store');

Route::delete('/feds/{id}', [FedController::class, 'destroy'])->name('feds.destroy');
