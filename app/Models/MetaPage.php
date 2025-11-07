<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaPage extends Model
{
    protected $table = 'meta_pages';
    
    protected $fillable = [
        'title',
        'description',
        'keywords',
    ];
}
