<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MetaSetting;

class MetaSettingsController extends Controller
{
    public function continousWorkhopSettingsCreate()
    {
        $metaSettings = MetaSetting::where('meta_key', 'continous_workshop')->first();
        $continousWorkshop = ($metaSettings && $metaSettings->meta_value == 'online') ? 1 : 0;
        return view('admin.meta_settings.continous_workshop', compact(['continousWorkshop']));
    }

    public function continousWorkhopSettingsStore(Request $request)
    {
        $input = $request->all();
        $metaSettings = MetaSetting::where('meta_key', 'continous_workshop')->first();
        if (!$metaSettings) {
            $metaSettings = new MetaSetting();
            $metaSettings->meta_key = 'continous_workshop';
        }
        $metaSettings->meta_value = 'offline';
        if(isset($input['type']) && $input['type']){
            $metaSettings->meta_value = 'online';
        }
        $metaSettings->save();

        session()->flash('success', 'Sttings successfully updated!');
        return redirect()->back();
    }

}
