<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    protected $table = 'plans';
    protected $fillable = [
        'name',
        'tier_label',
        'tier_icon',
        'image',
        'price',
        'duration',
        'roi_percentage',
        'min_hashpower',
        'max_hashpower',
        'is_active',
    ];
}
