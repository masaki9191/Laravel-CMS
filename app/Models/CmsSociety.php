<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsSociety extends Model
{
    protected $fillable = [
        'cms_society_text',
        'cms_society_sortnum',
        'cms_society_date',
        'cms_society_enabled',
    ];
    protected $primaryKey = 'cms_society_id';
    protected $attributes = [
        'cms_society_enabled' => '1',
    ];
    protected $table = "cms_society";
    public $timestamps = false;

}
