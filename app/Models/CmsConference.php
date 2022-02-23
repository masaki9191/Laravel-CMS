<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsConference extends Model
{
    const types = [
        0 => "",
        1 => "理事会",
        2 => "常任理事会",
        3 => "総務部会",
        4 => "総務・法制合同ＷＧ",
        5 => "法制部会",
        6 => "情報部会",
        7 => "広報部会",
        8 => "研修部会",
        9 => "研修部会ＷＧ",
        10 => "研修部会　テキストＷＧ",
        11 => "企業倫理委員会",
        12 => "専門研究会",
        13 => "循環器研究会",
        14 => "整形研究会",
        15 => "眼科研究会",
        16 => "公取協医器販協支部運営委員会",
        17 => "医療機器流通研究委員会",
    ];
    const time = [
        0 => "00:00",
        1 => "09:00",
        2 => "09:30",
        3 => "10:00",
        4 => "10:30",
        5 => "11:00",
        6 => "11:30",
        7 => "12:00",
        8 => "12:30",
        9 => "13:00",
        10 => "13:30",
        11 => "14:00",
        12 => "14:30",
        13 => "15:00",
        14 => "15:30",
        15 => "16:00",
        16 => "16:30",
        17 => "17:00",
        18 => "17:30",
        19 => "18:00",
        20 => "18:30",
        21 => "19:00",
        22 => "19:30",
        22 => "20:00",
    ];
    const storageDisk = 'conference';

    protected $fillable = [
        'cms_conference_type',
        'cms_conference_conf',
        'cms_conference_holding1',
        'cms_conference_holding2',
        'cms_conference_holding3',
        'cms_conference_place',
        'cms_conference_text',
        'cms_conference_sortnum',
        'cms_conference_filename'
    ];
    protected $appends = [
       'conf_date_time'
    ];
    protected $table = "cms_conference";
    public $timestamps = false;
    protected $primaryKey = 'cms_conference_id';

    public static function getTypes()
    {
        return self::types;
    }

    public static function getTimes()
    {
        return self::time;
    }



    public function getConfDateTimeAttribute()
    {
        return $this->cms_conference_holding1 . ' ' . $this->cms_conference_holding2 . '~' . $this->cms_conference_holding3;
    }

    public function type()
    {
       return $this->hasOne(CmsConferenceType::class,'id','cms_conference_type');
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
