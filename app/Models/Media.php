<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $appends = [
        'media_url'
    ];
    
    public function model()
    {
        return $this->morphTo();
    }

    public function getMediaUrlAttribute()
    {
        return \Storage::url($this->disk . '/' . $this->file_name);
    }

    public function delete()
    {
        \DB::beginTransaction();

        \Storage::disk($this->disk)->delete($this->file_name);


        $result = parent::delete();

        \DB::commit();

        return $result;
    }

}
