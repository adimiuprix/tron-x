<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetaPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('meta_pages')->insert([
            [
                'title' => 'TronX – Futuristic TRX Cloud Mining Platform',
                'description' => 'TronX Cloud Mining – Mine cryptocurrency effortlessly with instant payouts, secure cloud servers, and high ROI plans. Start your crypto mining journey today!',
                'keywords' => 'TronX, TronX Cloud Mining, cryptocurrency mining, Bitcoin mining, Ethereum mining, cloud mining, instant crypto payouts, secure crypto mining, crypto investment, mining plans, passive income crypto, TronX mining platform',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
