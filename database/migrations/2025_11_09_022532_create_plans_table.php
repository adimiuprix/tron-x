<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tier_label')->nullable();
            $table->string('tier_icon')->nullable();
            $table->string('image')->nullable();
            $table->decimal('price', 12, 3)->default(0.000);
            $table->integer('duration');
            $table->decimal('roi_percentage', 5, 1)->default(0.0);
            $table->integer('min_hashpower')->default(1);
            $table->integer('max_hashpower')->default(499);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
