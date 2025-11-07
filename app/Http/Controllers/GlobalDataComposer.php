<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\MetaPage;
use App\Models\Setting;

class GlobalDataComposer
{
    public function compose(View $view)
    {
        $metas = MetaPage::first();
        $setting = Setting::all()->pluck('value', 'key')->toArray();

        $view->with([
            'title' => $metas->title,
            'description' => $metas->description,
            'keywords' => $metas->keywords,
            'sitename' => $setting['site_name'] ?? '???',
            'fiat_curr' => $setting['fiat_curr'] ?? '???',
            'fiat_symbol' => $setting['fiat_symbol'] ?? '???',
            'crypto_name' => $setting['crypto_name'] ?? '???',
            'crypto_code' => $setting['crypto_code'] ?? '???',
        ]);
    }
}
