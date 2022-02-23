<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsDirector extends Model
{
    const roles = [
        0 => "",
        1 => "監　　事",
        2 => "理　　事",
        3 => "常任理事",
        4 => "副 会 長",
        5 => "会　　長",
        6 => "専務理事",
        7 => "顧問",
        8 => "予備",
    ];

    protected $fillable = [
        'name',
        'description',
        'sort_number',
        'class_name',
        'company',
    ];
    protected $appends = [
        'cms_class_text'
    ];

    public static function getRoles()
    {
        return self::roles;
    }

    public function getClassNameTextAttribute()
    {
        return isset(self::roles[$this->class_name]) ? self::roles[$this->class_name]:"";
    }

}
