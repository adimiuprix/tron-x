<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class GlobalDataComposer
{
    public function compose(View $view)
    {
        $view->with([
            'title' => 'TronX – Futuristic TRX Cloud Mining Platform',
            'description' => 'TronX Cloud Mining – Mine cryptocurrency effortlessly with instant payouts, secure cloud servers, and high ROI plans. Start your crypto mining journey today!',
            'keywords' => 'TronX, TronX Cloud Mining, cryptocurrency mining, Bitcoin mining, Ethereum mining, cloud mining, instant crypto payouts, secure crypto mining, crypto investment, mining plans, passive income crypto, TronX mining platform',
            'currency' => 'USD',
            'currency_symbol' => '$',
            'sitename' => 'TronX',
            'cryptocurrency' => 'TRX',
        ]);
    }
}
