<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'no',
        // 'ken',
        'syusai',
        'kyousai',
        'sien',
        'nittei1',
        'ampm',
        'nittei2',
        'nittei3',
        'kaizyou1',
        'kaizyou3',
        'kaizyou4',
        'kaizyou2',
        'tizu',
        'teiin',
        'teiin2',
        'zyk',
        'uketuke1',
        'uketuke2',
        'mscu',
        'zys',
        'kingaku1',
        'kingaku2',
        'khurikomi',
        'kigen',
        'kfax',
        'kemail',
        'kousi',
        'naiyou',
        'master_id',
        'type'
    ];
    protected $attributes = [
        'mokuteki' => '0',
        'taisyou' => '0',
        'title1' => '0',
        'title2' => '0',
        'title3' => '0',
        'sikaku' => '0',
        'question1' => '0',
        'question2' => '0',
    ];
    protected $table = 'kensyu1';
    public $timestamps = false;

}
