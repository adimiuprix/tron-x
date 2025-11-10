<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'plan_id',
        'hash_invoice',
        'user_id',
        'transaction_amount',
        'hashpower',
        'payment_method',
        'selected_crypto',
        'crypto_amount',
        'payment_address',
        'status',
    ];
}
