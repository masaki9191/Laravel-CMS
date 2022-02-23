<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = [
        'content',
        'type',
        'name1',
        'name2',
        'kana1',
        'kana2',
        'cname',
        'email',
        'tel1',
        'tel2',
        'tel3',
    ];

}
