<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkshopRegistration extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name1',
        'name2',
        'kana1',
        'kana2',
        'sex',
        'post1',
        'post2',
        'address1',
        'address2',
        'member',
        'ceigyou',
        'cname',
        'cpost1',
        'cpost2',
        'caddress1',
        'caddress2',
        'mail',
        'tel1',
        'tel2',
        'tel3',
        'fax1',
        'fax2',
        'fax3',
        'kensyu_id',
        'question1'
    ];
    protected $attributes = [
        'master_id' => 0,
        'no' => 123,
        'notification' => 0,
        'agency' => 0,
        'smail' => 0,
        'status' => 0,
        'nyuukin_date' => '0',
        'zyukouhyou_date' => '0',
        'zyukou_date' => '0',
        'touroku' => '0',
        'touroku_date' => '0',
        'kousin_date' => '0',
        'seikyuu_kingaku' => '0',
        'seikyuu_date' => '0',
        'question2' => '0',
        'question1' => '0',
//        'mokuteki'=>'0',
//        'taisyou'=>'0',
//        'title1'=>'0',
//        'title2'=>'0',
//        'title3'=>'0',
//        'sikaku'=>'0',
//        'question1'=>'0',
//        'question2'=>'0',
    ];
    protected $append = ['full_name', 'full_kana', 'notification_text', 'gender', 'home_address', 'status_text', 'touroku_text', 'member_text', 'smail_text','agency_text'];
    protected $table = 'mousikomi1';
    public $timestamps = false;

    public function getFullNameAttribute()
    {
        return $this->name1 . ' ' . $this->name2;
    }

    public function getFullKanaAttribute()
    {
        return $this->kana1 . ' ' . $this->kana2;
    }

    public function getGenderAttribute()
    {
        return ($this->sex == 1) ? 'Men' : 'Women';
    }

    public function getHomeAddressAttribute()
    {
        return $this->address1 . ' ' . $this->address2;
    }

    public function getStatusTextAttribute()
    {
        if ($this->status == 1) {
            $status = '未振込';
        } elseif ($this->status == 2) {
            $status = '振込済';
        } elseif ($this->status == 3) {
            $status = '未発行';
        } elseif ($this->status == 4) {
            $status = '発行済';
        } elseif ($this->status == 5) {
            $status = '未修了者';
        } else {
            $status = '修了者';
        }
        return $status;
    }

    public function getNotificationTextAttribute()
    {
        if ($this->notification == 1) {
            $notification = '医療機器販売及び賃与業の営業所管理者';
        } elseif ($this->notification == 2) {
            $notification = '医療機器修理責任技術者';
        } elseif ($this->notification == 3) {
            $notification = '営業所管理及び医療機器修理責任技術者を兼務している方';
        } else {
            $notification = 'その他';
        }
        return $notification;
    }

    public function getAgencyTextAttribute()
    {
        if ($this->agency == 1) {
            $agency = '（公財）医療機器センター';
        } elseif ($this->agency == 2) {
            $agency = '（一社）日本ホームヘルス機器協会';
        } elseif ($this->agency == 3) {
            $agency = '（公財）総合健康推進財団';
        } elseif ($this->agency == 4) {
            $agency = '基礎講習免除者（医師・歯科医師・薬剤師等）';
        } else {
            $agency = 'その他';
        }
        return $agency;
    }

    public function getTourokuTextAttribute()
    {
        if ($this->touroku == 1) {
            $touroku = "管理者";
        } else {
            $touroku = "一般";
        }
        return $touroku;
    }

    public function getMemberTextAttribute()
    {
        if ($this->member == 1) {
            $member = '<span style="color:#ff0000";>会員</span>';
        } else {
            $member = "非会員";
        }
        return $member;
    }

    public function getSmailTextAttribute()
    {
        if ($this->smail) {
            $smail = 'エラー';
            $seikyuu_kingaku = "";
        } elseif ($this->seikyuu_date) {
            $smail = $this->seikyuu_date;
        } else {
            $smail = '未送信';
        }
        return $smail;
    }

}
