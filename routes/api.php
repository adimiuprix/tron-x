<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/crypto-rates', function () {
    try {
        $response = Http::get('https://api.coingecko.com/api/v3/simple/price', [
            'ids' => 'bitcoin,ethereum,tether,tron,solana,litecoin,dogecoin,cardano,binancecoin,ripple,polygon',
            'vs_currencies' => 'usd',
        ]);

        if ($response->successful()) {
            $data = $response->json();

            return response()->json([
                'success' => true,
                'rates' => [
                    'BTC' => $data['bitcoin']['usd'] ?? 0,
                    'ETH' => $data['ethereum']['usd'] ?? 0,
                    'USDT' => $data['tether']['usd'] ?? 1,
                    'TRX' => $data['tron']['usd'] ?? 0,
                    'SOL' => $data['solana']['usd'] ?? 0,
                    'LTC' => $data['litecoin']['usd'] ?? 0,
                    'DOGE' => $data['dogecoin']['usd'] ?? 0,
                    'ADA' => $data['cardano']['usd'] ?? 0,
                    'BNB' => $data['binancecoin']['usd'] ?? 0,
                    'XRP' => $data['ripple']['usd'] ?? 0,
                    'MATIC' => $data['polygon']['usd'] ?? 0,
                ],
                'supported_currencies' => ['BTC','ETH','USDT','TRX','SOL','LTC','DOGE','ADA','BNB','XRP','MATIC'],
            ]);
        }

        return response()->json(['success' => false, 'message' => 'Failed to fetch rates']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Error: '.$e->getMessage()]);
    }
})->name('api.crypto-rates');
