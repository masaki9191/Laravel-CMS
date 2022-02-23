<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaSetting extends Model
{
    protected $fillable = [
        'meta_key',
        'meta_value',
    ];

}
