<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        $settings = [
            ['key' => 'site_name', 'value' => 'Tron-X'],
            ['key' => 'items_per_page', 'value' => '10'],
            ['key' => 'fiat_curr', 'value' => 'USD'],
            ['key' => 'fiat_symbol', 'value' => '$'],
            ['key' => 'crypto_name', 'value' => 'Troncoin'],
            ['key' => 'crypto_code', 'value' => 'TRX'],
            ['key' => 'support_contact', 'value' => 'support@gmail.com'],
            ['key' => 'withdraw_fees', 'value' => '2'],
        ];

        foreach ($settings as $setting) {
            DB::table('settings')->updateOrInsert(
                ['key' => $setting['key']],
                [
                    'value' => $setting['value'],
                    'updated_at' => $now,
                    'created_at' => $now,
                ]
            );
        }
    }
}
