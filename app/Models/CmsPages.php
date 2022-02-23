<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsPages extends Model
{
    const ABOUTETHICS = 'about-ethics';

    private $statusArr = [
        1 => 'Activate',
        0 => 'Deactivate',
    ];
    private $typeArr = [
        1 => 'Cms pages',
    ];
    protected $fillable = [
        'title',
        'description',
        'status',
        'authentication_required',
        'type'
    ];
    protected $attributes = [
        'authentication_required' => 0,
        'type' => 1,
        'status'=>1
    ];
    protected $appends = [
        'type_text', 'authentication_required_text', 'status_text'
    ];

    public function getTypeTextAttribute()
    {
        return $this->typeArr[$this->type];
    }

    public function getStatusTextAttribute()
    {
        return $this->statusArr[$this->status];
    }

    public function getAuthenticationRequiredTextAttribute()
    {
        return $this->authentication_required ? 'Yes' : 'No';
    }

    public static function getStatusArr()
    {
        return $this->statusArr;
    }

    public static function getTypeArr()
    {
        return $this->typeArr;
    }

}
