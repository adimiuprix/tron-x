<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/payment-proofs', [HomeController::class, 'paymentProofs'])->name('payment.proofs');
Route::get('/account', [UserController::class, 'account'])->name('account');
Route::get('/buy-hash', [UserController::class, 'buyHash'])->name('buy.hash');
Route::get('/purchase/{hash}', [UserController::class, 'purchase'])->name('purchase');
Route::get('/mining-metrics', [UserController::class, 'miningMetrics'])->name('mining.metrics');
Route::get('/my-history', [UserController::class, 'history'])->name('my.history');
Route::get('/my-deposits', [UserController::class, 'deposits'])->name('my.deposits');
Route::get('/my-withdrawals', [UserController::class, 'withdrawals'])->name('my.withdrawals');
Route::get('/referrals', [UserController::class, 'referrals'])->name('referrals');
Route::get('/profit-calculator', [UserController::class, 'profitCalculator'])->name('profit.calculator');
Route::get('/news', [UserController::class, 'news'])->name('news');
Route::get('/tickets', [UserController::class, 'tickets'])->name('tickets');
Route::post('/create-ticket', [UserController::class, 'createTicket'])->name('create.ticket');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/getbalance', [UserController::class, 'getUserBalance'])->name('getbalance');