<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsKaiin extends Model
{
    const groupName = [
        1 => '北海道医療機器販売業協会',
        2 => '青森県医療機器販売業協会',
        3 => '岩手県医療機器販売業協会',
        4 => '宮城県医療機器販売業協会',
        5 => '秋田県医療機器販売業協会',
        6 => '山形県医療機器販売業協会',
        7 => '福島県医療機器販売業協会',
        8 => '茨城県医療機器販売業協会',
        9 => '栃木県医療機器販売業協会',
        10 => '群馬県医療機器販売業協会',
        11 => '埼玉県医療機器販売業協会',
        12 => '千葉県医療機器販売業協会',
        13 => '東京都医療機器販売業協会',
        14 => '神奈川県医療機器販売業協会',
        15 => '新潟県医療機器販売業協会',
        16 => '富山県医療機器協会',
        17 => '石川県医療機器協会',
        18 => '福井県医療機器協会',
        19 => '山梨県医療機器販売業協会',
        20 => '長野県医療機器販売業協会',
        21 => '岐阜県医療機器販売業協会',
        22 => '静岡県医療機器販売業協会',
        23 => '愛知県医療機器販売業協会',
        24 => '三重県医療機器販売業協会',
        25 => '京都医療機器協会　滋賀県支部',
        26 => '京都医療機器協会',
        27 => '一般社団法人 大阪医療機器協会',
        28 => '兵庫県医療機器協会',
        29 => '一般社団法人 大阪医療機器協会　奈良県支部',
        30 => '一般社団法人 大阪医療機器協会　和歌山県支部',
        31 => '山陰医療機器販売業協会',
        32 => '山陰医療機器販売業協会　鳥取県支部',
        33 => '岡山県医療機器販売業協会',
        34 => '広島県医療機器販売業協会',
        35 => '山口県医療機器販売業協会',
        36 => '徳島県医療機器協会',
        37 => '香川県医療機器販売業協会',
        38 => '愛媛県医療機器販売業協会',
        39 => '高知県医療機器販売業協会',
        40 => '福岡県医療機器協会',
        41 => '佐賀県医療機器協会',
        42 => '長崎県医療機器協会',
        43 => '熊本県医療機器協会',
        44 => '大分県医療機器協会',
        45 => '宮崎県医療機器協会',
        46 => '鹿児島県医療機器協会',
        47 => '沖縄県医療機器協会',
        48 => '山陰医療機器販売業協会　島根県支部',
    ];
    const affiliation = [
        1 => 'Board Member (Company)',
        2 => 'Board Member (Organization)',
        3 => 'Board Member (Auditor)',
        4 => 'Others'
    ];

    protected $fillable = [
        'cms_kaiin_type',
        'cms_member_no',
        'cms_kaiin_name1',
        'cms_kaiin_name2',
        'cms_kaiin_sex',
        'cms_kaiin_mypost1',
        'cms_kaiin_mypost2',
        'cms_kaiin_lang',
        'cms_kaiin_myadd',
        'cms_kaiin_member',
        'cms_kaiin_member_main',
        'cms_kaiin_block',
        'cms_kaiin_represen',
        'cms_kaiin_reptitle',
        'cms_group_reptitle',
        'cms_group_represen',
        'cms_group_zip',
        'cms_group_address',
        'cms_group_company',
        'cms_group_tel',
        'cms_group_fax',
        'cms_kaiin_cname',
        'cms_kaiin_business',
        'cms_kaiin_cpost1',
        'cms_kaiin_cpost2',
        'cms_kaiin_clang',
        'cms_kaiin_cadd',
        'cms_kaiin_mail',
        'cms_kaiin_mail1',
        'cms_kaiin_mail2',
        'cms_kaiin_mail3',
        'cms_kaiin_pass',
        'cms_kaiin_fileenabled',
        'cms_kaiin_tel1',
        'cms_kaiin_tel2',
        'cms_kaiin_tel3',
        'cms_kaiin_fax1',
        'cms_kaiin_fax2',
        'cms_kaiin_fax3',
        'cms_kaiin_url',
        'cms_kaiin_const',
        'cms_kaiin_class',
        'cms_affiliation',
        'company_name_hurigana',
        'company_name_chinese',
        'company_title',
        'full_name_hurigana',
        'full_name_chinese',
        'prefecture_no',
        'dob',
        'group_leader',
        'organization',
        'group_title',
        'remarks1',
        'remarks2',
        'state',
        'address1',
        'address2'
    ];
    protected $attributes = [
        'cms_kaiin_belonging1' => '0',
        'cms_kaiin_belonging2' => '0',
        'cms_kaiin_belonging3' => '0',
        'cms_kaiin_belonging4' => '0',
        'cms_kaiin_belonging5' => '0',
        'cms_kaiin_belonging6' => '0',
        'cms_kaiin_belonging7' => '0',
        'cms_kaiin_belonging8' => '0',
        'cms_kaiin_belonging9' => '0',
        'cms_kaiin_belonging10' => '0',
        'cms_kaiin_belonging11' => '0',
        'cms_kaiin_belonging12' => '0',
        'cms_kaiin_belonging13' => '0',
        'cms_kaiin_belonging14' => '0',
        'cms_kaiin_belonging15' => '0',
        'cms_kaiin_belonging16' => '0',
        'cms_kaiin_belonging17' => '0',
        'cms_kaiin_belonging18' => '0',
        'cms_kaiin_belonging19' => '0',
        'cms_kaiin_belonging20' => '0',
        'cms_kaiin_belonging21' => '0',
        'cms_kaiin_belonging22' => '0',
        'cms_kaiin_belonging23' => '0',
        'cms_kaiin_belonging24' => '0',
        'cms_kaiin_belonging25' => '0',
        'cms_kaiin_belonging26' => '0',
        'cms_kaiin_belonging27' => '0',
        'cms_kaiin_belonging28' => '0',
        'cms_kaiin_belonging29' => '0',
        'cms_kaiin_belonging30' => '0',
        'cms_kaiin_delflag' => 0,
        'cms_kaiin_master' => 0,
        'cms_kaiin_sex' => '1',
        'cms_kaiin_lang' => 1,
        'cms_kaiin_member' => 1,
        'cms_kaiin_member_main' => 0,
        'cms_kaiin_block' => 1,
        "cms_kaiin_clang" => 1,
        "cms_kaiin_fileenabled" => 0,
        "cms_kaiin_const" => 1,
        "group_leader"=>0,
        "remarks1"=>'0'
    ];
    protected $table = 'cms_kaiin';
    public $timestamps = false;
    protected $primaryKey = 'cms_kaiin_id';

    public static function getGroupName()
    {
        return self::groupName;
    }

    public static function getAffiliation()
    {
        return self::affiliation;
    }

    public function conferenceTypes()
    {
        return $this->belongsToMany(
                CmsConferenceType::class, 'cms_kaiin_cms_conference_type', 'cms_kaiin_id', 'cms_conference_type_id');
    }

    public function conferenceReservation()
    {
        return $this->hasMany(
                CmsReservation::class, 'cms_kaiin_id', 'cms_kaiin_id');
    }

    public function checkConferenceReservation($conferenceId)
    {
        return $this->conferenceReservation()->where('cms_conference_id', $conferenceId)->first();
    }

}
