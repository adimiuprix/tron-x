<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Plans;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HashPurchaseController extends Controller
{
    public function store(Request $request)
    {
        $invoice = $request->all();

        // array:20 [▼
        //     "_token" => "YJB04lKZqwZJYELpppdnjo2ZtLzKPWTT0s3yhsPX"
        //     "user_id" => "1"
        //     "plan_key" => "professional"
        //     "plan_name" => "Professional Tier"
        //     "tier_level" => "2"
        //     "hashpower" => "1251"
        //     "hashpower_unit" => "GH"
        //     "amount" => "625.5"
        //     "daily_profit" => "32.11317"
        //     "total_return" => "963.3951"
        //     "roi" => "154.02"
        //     "daily_rate" => "0.02567"
        //     "duration" => "30"
        //     "payment_method" => "wallet"
        //     "selected_crypto" => "DOGE"
        //     "crypto_amount" => "1008.0910958299787"
        //     "crypto_rate" => "0.181342"
        //     "trx_rate" => "0.292261"
        //     "purchase_timestamp" => "2025-11-10T03:18:47.836Z"
        //     "rates_timestamp" => "Nov 10, 2025, 10:18 AM"
        // ]

        // Ambil user id dari data yang diterima
        $user = $invoice['user_id'];
        
        // Ambil plan id dari plan key yang diterima
        $plan = Plans::where('name', $invoice['plan_key'])->select('id')->firstOrFail();

        // Simpan ke tabel transaksi
        Transaction::create([
            'plan_id' => $plan->id,
            'hash_invoice' => 'HP' . time(),    // pembuatan invoice unik
            'user_id' => $user,
            'transaction_amount' => $invoice['amount'], // based on selected package
            'hashpower' => $invoice['hashpower'],
            'payment_method' => $invoice['payment_method'], // e.g., 'crypto'
            'selected_crypto' => $invoice['selected_crypto'] ?? null, // e.g., 'BTC'
            'crypto_amount' => $invoice['crypto_amount'] ?? null,
            'status' => 'pending',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Hashpower purchase created successfully',
            'data' => ''
        ]);
    }
}
