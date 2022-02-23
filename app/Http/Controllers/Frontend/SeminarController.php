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
use App\Models\Master;
use App\Models\Workshop;

class SeminarController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $records = Master::whereHas('workshops', function($q) use ($request) {
                $q->where('type', 3);
                 if ($request->get('from')) {
                    $q->where('master_id', '>=', $request->get('from'));
                }
                if ($request->get('to')) {
                    $q->where('master_id', '<=', $request->get('to'));
                }
            })->get();
        return view('frontend.workshops.seminar.outline', compact(['records']));
    }

    public function events(Request $request)
    {
        $records = Master::whereHas('workshops', function($q) use ($request) {
                $q->where('type', 3);
                 if ($request->get('from')) {
                    $q->where('master_id', '>=', $request->get('from'));
                }
                if ($request->get('to')) {
                    $q->where('master_id', '<=', $request->get('to'));
                }
            })->get();
        return view('frontend.workshops.seminar.events', compact(['records']));
    }

    public function outlineDetails($id)
    {
        $record = Workshop::where('id', $id)->first();
        return view('frontend.workshops.seminar.outline-details',compact(['record']));
    }

    public function eventsDetails($id)
    {
        $record = Workshop::where('id', $id)->first();
        return view('frontend.workshops.seminar.events-details',compact(['record']));
    }

    public function create()
    {
        return view('frontend.workshops.seminar.form');
    }

    public function confirmation()
    {
        return view('frontend.workshops.seminar.confirmation');
    }

}
