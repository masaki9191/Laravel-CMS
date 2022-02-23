<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrontGallery extends Model
{
    private $statusArr = [
        1 => 'Activate',
        0 => 'Deactivate',
    ];
    protected $fillable = [
        'title',
        'description',
        'status',
        'date'
    ];
    protected $appends = [
        'status_text'
    ];

    const storageDisk = 'front_gallery';

    public function getStatusTextAttribute()
    {
        return $this->statusArr[$this->status];
    }

    public static function getStatusArr()
    {
        return $this->statusArr;
    }

    public function model()
    {
        return $this->morphMany(Media::class, 'model');
    }

     public function delete()
    {
        \DB::beginTransaction();

        foreach ($this->model() as $img) {
            \Storage::disk($img->disk)->delete($img->file_name);
        }

        $this->model()->delete();

        $result = parent::delete();

        \DB::commit();

        return $result;
    }

}
