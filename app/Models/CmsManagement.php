<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsManagement extends Model
{
    private $statusArr = [
        1 => 'Activate',
        0 => 'Deactivate',
    ];
    protected $fillable = [
        'title',
        'description',
        'status',
        'management_date',
        'type'
    ];
    protected $appends = [
        'status_text', 'jp_date'
    ];
    protected $attributes = [
        'status' => '1',
    ];

    const storageDisk = 'management';

    public function getStatusTextAttribute()
    {
        //return $this->statusArr[$this->status];
        return $this->status;
    }

    public static function getStatusArr()
    {
        return $this->statusArr;
    }

    public function model()
    {
        return $this->morphMany(Media::class, 'model');
    }

    public function getJpDateAttribute()
    {
        // $longFormatter = new \IntlDateFormatter(
        //     'ja_JP', \IntlDateFormatter::LONG, \IntlDateFormatter::NONE
        // );
        // $datetime = new \DateTime($this->management_date);
        // return $longFormatter->format($datetime);
        //return $this->management_date;
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
