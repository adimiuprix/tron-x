<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faqs')->insert([
            [
                'question' => 'What is Tronx?',
                'answer' => 'Tronx is a cloud-based TRON mining platform where users can invest in different hashpower plans and earn daily mining rewards directly to their wallets.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'What are the available plans?',
                'answer' => 'We currently offer three mining plans:

                    Starter Tier – Perfect for beginners who want to try mining with a low entry cost.

                    Professional Tier – Designed for intermediate users looking for higher and stable returns.

                    Enterprise Tier – Our premium plan with maximum hashpower and the highest profitability.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'How do I start mining?',
                'answer' => '- Create a free Tronx account.

                    - Choose your preferred plan

                    - Deposit TRX and activate your plan.

                    - Start receiving daily mining rewards automatically.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'How are rewards calculated?',
                'answer' => 'Rewards are based on the hashpower of your selected plan. The higher the plan, the greater your daily mining output.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Can I upgrade my plan later?',
                'answer' => 'Yes ✅ You can upgrade anytime from Starter → Power → Mega Hash by paying the difference in cost.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Is there a withdrawal limit?',
                'answer' => 'Withdrawals can be made directly to your TRON wallet and Faucetpay once the minimum threshold is reached. The limit depends on your plan and the network fee.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Is my investment safe?',
                'answer' => 'Tronx is built with secure infrastructure and blockchain transparency. However, like any crypto-related activity, users should invest responsibly.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
