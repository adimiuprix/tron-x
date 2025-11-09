<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    protected $table = 'plans';
    protected $fillable = [
        'name',
        'price',
        'duration',
        'features',
        'is_active',
    ];
}
