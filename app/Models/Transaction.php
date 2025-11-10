<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'plan_id',
        'hash_invoice',
        'user_id',
        'hashpower',
        'transaction_amount',
        'payment_method',
        'selected_crypto',
        'status',
    ];
}
