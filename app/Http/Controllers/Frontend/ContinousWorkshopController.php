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
use App\Http\Requests\WorkshopRegistartionRequest;
use App\Models\WorkshopRegistration;

class ContinousWorkshopController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        return view('frontend.workshops.continous.outline');
    }

    public function materials(Request $request)
    {
        return view('frontend.workshops.continous.materials');
    }

    public function mdic(Request $request)
    {
        return view('frontend.workshops.continous.mdic');
    }

    public function certificatOfCompletion(Request $request)
    {
        return view('frontend.workshops.continous.certificate_of_completion');
    }

    public function application(Request $request)
    {
        $records = Master::whereHas('workshops', function($q) use ($request) {
                $q->where('type', 1);
                if ($request->get('from')) {
                    $q->where('master_id', '>=', $request->get('from'));
                }
                if ($request->get('to')) {
                    $q->where('master_id', '<=', $request->get('to'));
                }
            })->get();
        return view('frontend.workshops.continous.application', compact(['records']));
    }

    public function applicationDetails($id)
    {
        $record = Workshop::where('id', $id)->first();
        return view('frontend.workshops.continous.application-details', compact(['record']));
    }

    public function create()
    {
        $masters = Master::where('id', '<', 48)->get();
        return view('frontend.workshops.continous.form', compact(['masters']));
    }

    public function store(WorkshopRegistartionRequest $request)
    {
        $validated = $request->validated();

        $input = $request->all();
        $registration = WorkshopRegistration::create($input);

        session()->flash('success', 'Registration successfully created!');
        return redirect()->route('frontend.other.workshop.confirmation');
    }

    public function confirmation()
    {
        return view('frontend.workshops.continous.confirmation');
    }

    public function faq()
    {
        return view('frontend.workshops.continous.faq');
    }

}
