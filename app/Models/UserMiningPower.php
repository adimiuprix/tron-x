<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMiningPower extends Model
{
    protected $table = 'user_mining_powers';
    protected $fillable = [
        'power',
        'user_id',
        'status',
        'expire_date',
        'last_sum',
    ];
}
