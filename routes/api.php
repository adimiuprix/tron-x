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
})->name('api.crypto-databases');

Route::get('/app-config', function () {
    return response()->json([
        'config' => [
            'dailyRate' => 0.023340000000000,
            'exchangeRate' => 1,
            'currencyCode' => 'TRX',
            'hashpowerUnit' => 'GH',
            'hashpowerPrice' => 0.50000000,
            'defaultPeriod' => 30,
            'purchaseMin' => 1,
            'tierSystemEnabled' => true,
        ],
        'plans' => [
            'starter' => [
                'name' => 'Starter Tier',
                'icon' => 'fa-rocket',
                'hashpower_min' => 1,
                'hashpower_max' => 499,
                'hashpower_default' => 1,
                'hashpower_range' => '1-499',
                'duration' => 30,
                'daily_profit_rate' => 0.02334,
                'support_level' => 'Standard Support',
                'features' => ['Instant Activation'],
                'tier_level' => 1,
                'tier_color' => 'success',
                'roi_percentage' => 140.04,
            ],
            'professional' => [
                'name' => 'Professional Tier',
                'icon' => 'fa-crown',
                'hashpower_min' => 500,
                'hashpower_max' => 1999,
                'hashpower_default' => 500,
                'hashpower_range' => '500-1999',
                'duration' => 30,
                'daily_profit_rate' => 0.02567,
                'support_level' => 'Priority Support',
                'features' => ['Priority Support'],
                'featured' => true,
                'tier_level' => 2,
                'tier_color' => 'warning',
                'roi_percentage' => 154.02,
            ],
            'enterprise' => [
                'name' => 'Enterprise Tier',
                'icon' => 'fa-gem',
                'hashpower_min' => 2000,
                'hashpower_max' => 10000,
                'hashpower_default' => 2000,
                'hashpower_range' => '2000-10000',
                'duration' => 30,
                'daily_profit_rate' => 0.029,
                'support_level' => 'VIP Support',
                'features' => ['VIP Support'],
                'tier_level' => 3,
                'tier_color' => 'primary',
                'roi_percentage' => 174,
            ],
        ],
        'tierConfig' => [
            'enabled' => true,
            'tiers' => [
                ['min' => 1, 'max' => 499, 'rate' => 0.02334, 'name' => 'Starter Tier', 'level' => 1, 'roi' => 140.04],
                ['min' => 500, 'max' => 1999, 'rate' => 0.02567, 'name' => 'Professional Tier', 'level' => 2, 'roi' => 154.02],
                ['min' => 2000, 'max' => 10000, 'rate' => 0.029, 'name' => 'Enterprise Tier', 'level' => 3, 'roi' => 174],
            ],
        ],
    ]);
})->name('api.app-config');

Route::post('/buy-hash', [HashPurchaseController::class, 'store'])->name('hash.store');
