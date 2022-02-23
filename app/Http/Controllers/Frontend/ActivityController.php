<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CmsDirector;
use App\Models\CmsManagement;
use App\Models\Topic;
use App\Models\CmsSociety;
use App\Models\CmsPages;
use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $records = CmsManagement::where('status', 1)->where('type',1)->paginate(10);
        return view('frontend.activity.whats-new', compact(['records']));
    }

    public function disaster()
    {
        return view('frontend.activity.disaster');
    }

    public function information()
    {
        return view('frontend.activity.information');
    }

    public function prevention()
    {
        return view('frontend.activity.prevention');
    }

}
