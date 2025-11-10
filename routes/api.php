<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HashPurchaseController;

Route::get('/crypto-rates', function () {
    try {
        $response = Http::get('https://api.coingecko.com/api/v3/simple/price', [
            'ids' => 'bitcoin,ethereum,tether,tron,solana,litecoin,dogecoin,cardano,binancecoin,ripple',
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
                ],
                'supported_currencies' => [
                    'BTC',
                    'ETH',
                    'USDT',
                    'TRX',
                    'SOL',
                    'LTC',
                    'DOGE',
                    'ADA',
                    'BNB',
                    'XRP',
                ],
            ]);
        }

        return response()->json(['success' => false, 'message' => 'Failed to fetch rates']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Error: '.$e->getMessage()]);
    }
})->name('api.crypto-rates');

Route::get('/crypto-databases', function () {
    return response()->json([
        'BTC' => [
            'name' => 'Bitcoin',
            'symbol' => 'BTC',
            'image' => 'https://assets.coingecko.com/coins/images/1/large/bitcoin.png',
            'coinGeckoId' => 'bitcoin'
        ],
        'ETH' => [
            'name' => 'Ethereum',
            'symbol' => 'ETH',
            'image' => 'https://assets.coingecko.com/coins/images/279/large/ethereum.png',
            'coinGeckoId' => 'ethereum'
        ],
        'USDT' => [
            'name' => 'Tether',
            'symbol' => 'USDT',
            'image' => 'https://assets.coingecko.com/coins/images/325/large/Tether.png',
            'coinGeckoId' => 'tether'
        ],
        'TRX' => [
            'name' => 'TRON',
            'symbol' => 'TRX',
            'image' => 'https://assets.coingecko.com/coins/images/1094/large/tron-logo.png',
            'coinGeckoId' => 'tron',
        ],
        'SOL' => [
            'name' => 'Solana',
            'symbol' => 'SOL',
            'image' => 'https://assets.coingecko.com/coins/images/4128/large/solana.png',
            'coinGeckoId' => 'solana',
        ],
        'LTC' => [
            'name' => 'Litecoin',
            'symbol' => 'LTC',
            'image' => 'https://assets.coingecko.com/coins/images/2/large/litecoin.png',
            'coinGeckoId' => 'litecoin',
        ],
        'DOGE' => [
            'name' => 'Dogecoin',
            'symbol' => 'DOGE',
            'image' => 'https://assets.coingecko.com/coins/images/5/large/dogecoin.png',
            'coinGeckoId' => 'dogecoin',
        ],
        'ADA' => [
            'name' => 'Cardano',
            'symbol' => 'ADA',
            'image' => 'https://assets.coingecko.com/coins/images/975/large/cardano.png',
            'coinGeckoId' => 'cardano',
        ],
        'BNB' => [
            'name' => 'BNB',
            'symbol' => 'BNB',
            'image' => 'https://assets.coingecko.com/coins/images/825/large/bnb-icon2_2x.png',
            'coinGeckoId' => 'binancecoin',
        ],
        'XRP' => [
            'name' => 'XRP',
            'symbol' => 'XRP',
            'image' => 'https://assets.coingecko.com/coins/images/44/large/xrp-symbol-white-128.png',
            'coinGeckoId' => 'ripple',
        ],
    ]);
});

Route::get('/plans', function () {
    return response()->json([
        'starter' => [
            'name' => 'Starter Tier',
            'icon' => 'fa-rocket',
            'hashpower' => 100,
            'hashpower_range' => '1-499',
            'duration' => 30,
            'daily_profit_rate' => 0.02334,
            'tier_level' => 1,
            'tier_color' => 'success',
            'roi_percentage' => 5,
            'price' => 50,
            'daily_profit' => 2.334,
            'total_profit' => 70.02,
            'calculated_roi' => 140.04,
        ],
        'professional' => [
            'name' => 'Professional Tier',
            'icon' => 'fa-crown',
            'hashpower' => 1000,
            'hashpower_range' => '500-1999',
            'duration' => 30,
            'daily_profit_rate' => 0.02567,
            'featured' => true,
            'tier_level' => 2,
            'tier_color' => 'warning',
            'roi_percentage' => 7.5,
            'price' => 500,
            'daily_profit' => 25.67,
            'total_profit' => 770.1,
            'calculated_roi' => 154.02,
        ],
        'enterprise' => [
            'name' => 'Enterprise Tier',
            'icon' => 'fa-gem',
            'hashpower' => 10000,
            'hashpower_range' => '2000-10000',
            'duration' => 30,
            'daily_profit_rate' => 0.029,
            'tier_level' => 3,
            'tier_color' => 'primary',
            'roi_percentage' => 10,
            'price' => 5000,
            'daily_profit' => 290,
            'total_profit' => 8700,
            'calculated_roi' => 174,
        ],
    ]);
});
Route::post('/buy-hash', [HashPurchaseController::class, 'store'])->name('hash.store');
