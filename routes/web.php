<?php

use App\Http\Controllers\CommentController;
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

// view
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// post
Route::post('/feds', [FedController::class, 'store'])->name('feds.store');

// get
Route::get('/feds/{fed}', [FedController::class, 'show'])->name('feds.show');

// edit & update
Route::get('/feds/{fed}/edit', [FedController::class, 'edit'])->name('feds.edit');
Route::put('/feds/{fed}', [FedController::class, 'update'])->name('feds.update');

// delete
Route::delete('/feds/{fed}', [FedController::class, 'destroy'])->name('feds.destroy');

// comments
Route::post('/feds/{fed}/comments', [CommentController::class, 'store'])->name('feds.comments.store');
