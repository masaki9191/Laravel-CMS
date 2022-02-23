<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsConferenceType extends Model
{
    protected $fillable = [
        'name',
    ];
    protected $table = "cms_conference_type";

}
