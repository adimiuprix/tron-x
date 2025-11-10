<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            [
                'id' => 1,
                'name' => 'Starter',
                'tier_label' => 'Tier 1',
                'tier_icon' => 'fa-rocket',
                'image' => 'starter-plan.png',
                'roi_percentage' => 140.0,
                'min_hashpower' => 1,
                'max_hashpower' => 499,
                'is_active' => 1,
                'created_at' => '2025-11-09 02:40:31',
                'updated_at' => '2025-11-09 02:39:31',
            ],
            [
                'id' => 2,
                'name' => 'Professional',
                'tier_label' => 'Tier 2',
                'tier_icon' => 'fa-crown',
                'image' => 'professional-plan.png',
                'roi_percentage' => 150.0,
                'min_hashpower' => 500,
                'max_hashpower' => 1999,
                'is_active' => 1,
                'created_at' => '2025-11-09 02:47:28',
                'updated_at' => '2025-11-09 02:47:28',
            ],
            [
                'id' => 3,
                'name' => 'Enterprise',
                'tier_label' => 'Tier 3',
                'tier_icon' => 'fa-gem',
                'image' => 'enterprise-plan.png',
                'roi_percentage' => 175.0,
                'min_hashpower' => 2000,
                'max_hashpower' => 10000,
                'is_active' => 1,
                'created_at' => '2025-11-09 02:53:05',
                'updated_at' => '2025-11-09 02:53:05',
            ],
        ]);
    }
}
