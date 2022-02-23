<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsReservation extends Model
{
    protected $fillable = [
    ];
   
    protected $table = "cms_reservation";
    public $timestamps = false;
    protected $primaryKey = 'cms_reservation_id';
   
}
