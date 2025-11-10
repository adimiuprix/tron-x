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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plan_id');
            $table->string('hash_invoice')->unique();
            $table->unsignedBigInteger('user_id');
            $table->decimal('transaction_amount', 15, 8);
            $table->decimal('hashpower', 15, 2);
            $table->string('payment_method');
            $table->string('selected_crypto')->nullable();
            $table->decimal('crypto_amount', 15, 8)->nullable();
            $table->string('payment_address')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
