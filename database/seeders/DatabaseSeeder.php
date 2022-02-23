<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Master;
use Illuminate\Support\Facades\DB;
use App\Models\CmsManagement;
use App\Models\CmsDirector;
use App\Models\CmsKaiin;
use App\Models\Workshop;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
//    const types = [
//        0 => "",
//        1 => "理事会",
//        2 => "常任理事会",
//        3 => "総務部会",
//        4 => "総務・法制合同ＷＧ",
//        5 => "法制部会",
//        6 => "情報部会",
//        7 => "広報部会",
//        8 => "研修部会",
//        9 => "研修部会ＷＧ",
//        10 => "研修部会　テキストＷＧ",
//        11 => "企業倫理委員会",
//        12 => "専門研究会",
//        13 => "循環器研究会",
//        14 => "整形研究会",
//        15 => "眼科研究会",
//        16 => "公取協医器販協支部運営委員会",
//        17 => "医療機器流通研究委員会",
//    ];
    public function run()
    {
        $records = Workshop::where('master_id', '>', 47)->get();
        foreach ($records as $record) {
            $record->type = 2;
            $record->save();
        }
//        $records = DB::table('cms_management_old')->get();
//        foreach ($records as $record) {
//            $data = new CmsManagement();
//            $data->id = $record->cms_management_id;
//            $data->status = $record->cms_management_enabled;
//            $data->management_date = $record->cms_management_date;
//            $data->title = $record->cms_management_title;
//            $data->description = $record->cms_management_text;
//            $data->save();
//        }
//        $records = \App\Models\CmsKaiin::where('cms_kaiin_class',1)->get();
//        foreach ($records as $record) {
//           if($record->cms_kaiin_belonging1 == 1){
//               $record->conferenceTypes()->attach([1]);
//           }
//            if($record->cms_kaiin_belonging2 == 1){
//               $record->conferenceTypes()->attach([2]);
//           }
//            if($record->cms_kaiin_belonging3 == 1){
//               $record->conferenceTypes()->attach([3]);
//           }
//            if($record->cms_kaiin_belonging4 == 1){
//               $record->conferenceTypes()->attach([4]);
//           }
//            if($record->cms_kaiin_belonging5 == 1){
//               $record->conferenceTypes()->attach([5]);
//           }
//            if($record->cms_kaiin_belonging6 == 1){
//               $record->conferenceTypes()->attach([6]);
//           }
//            if($record->cms_kaiin_belonging7 == 1){
//               $record->conferenceTypes()->attach([7]);
//           }
//            if($record->cms_kaiin_belonging8 == 1){
//               $record->conferenceTypes()->attach([8]);
//           }
//            if($record->cms_kaiin_belonging9 == 1){
//               $record->conferenceTypes()->attach([9]);
//           }
//            if($record->cms_kaiin_belonging10 == 1){
//               $record->conferenceTypes()->attach([10]);
//           }
//            if($record->cms_kaiin_belonging11 == 1){
//               $record->conferenceTypes()->attach([11]);
//           }
//            if($record->cms_kaiin_belonging12 == 1){
//               $record->conferenceTypes()->attach([12]);
//           } if($record->cms_kaiin_belonging13 == 1){
//               $record->conferenceTypes()->attach([13]);
//           }
//            if($record->cms_kaiin_belonging14 == 1){
//               $record->conferenceTypes()->attach([14]);
//           }
//            if($record->cms_kaiin_belonging15 == 1){
//               $record->conferenceTypes()->attach([15]);
//           }
//            if($record->cms_kaiin_belonging16 == 1){
//               $record->conferenceTypes()->attach([16]);
//           }
//            if($record->cms_kaiin_belonging17 == 1){
//               $record->conferenceTypes()->attach([17]);
//           }
//             if($record->cms_kaiin_belonging18 == 1){
//               $record->conferenceTypes()->attach([18]);
//           }
//
//
//        }
//        Permission::truncate();
//        Role::truncate();
//        $permission = Permission::firstOrCreate(['name' => 'buyer', 'guard_name' => 'web']);
//        $role = Role::firstOrCreate(['name' => 'buyer', 'guard_name' => 'web']);
////        $role->syncPermissions('buyer');
//        $permission = Permission::insert([
//                ['name' => 'can see own city workshop', 'guard_name' => 'web'],
//                ['name' => 'can edit own city workshop', 'guard_name' => 'web'],
//                ['name' => 'can delete own city workshop', 'guard_name' => 'web']
//        ]);
//        $role = Role::firstOrCreate(['name' => 'master', 'guard_name' => 'web']);
//        $role->syncPermissions(Permission::all());
//        $role = Role::firstOrCreate(['name' => 'super admin', 'guard_name' => 'web']);
//        $user = Master::where('email', 'admin@gmail.com')->first();
//        $user->assignRole('super admin');
//        $masters = Master::all();
//        foreach ($masters as $master) {
//            if (!$master->email == 'admin@gmail.com') {
//
//                //  $master->assignRole('master');
//            } else {
//                $master->username = $master->name;
//                $master->password = Hash::make($master->pass);
//                $fax = explode("mail:", $master->fax);
//                $master->email = (isset($fax['1'])) ? trim(str_replace(')','',$fax['1'])) : "";
//                $master->save();
//            }
//        }
//        $permission = Permission::firstOrCreate(['name' => 'seller', 'guard_name' => 'web']);
//        $role = Role::firstOrCreate(['name' => 'seller', 'guard_name' => 'web']);
//        $role->syncPermissions('seller');
//        $permission = Permission::firstOrCreate(['name' => 'import', 'guard_name' => 'web']);
        // $role = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
//        $role->syncPermissions(Permission::all());
//        $user = User::firstOrCreate(['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('admin@123#')]);
//        $user->assignRole('admin');
    }

}
