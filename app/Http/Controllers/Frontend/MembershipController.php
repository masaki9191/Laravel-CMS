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
use App\Models\CmsConference;

class MembershipController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $conferences = CmsConference::orderBy('cms_conference_id', 'desc');
        if (request()->get('type')) {
            $conferences = $conferences->where('cms_conference_type', request()->get('type'));
        }
        $conferences = $conferences->get();
        return view('frontend.membership.index',compact(['conferences']));
    }

}
