<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsNews extends Model
{
    protected $fillable = [
        'title',
        'description',
        'news_date',
        'type'
    ];

    const storageDisk = 'news';

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
