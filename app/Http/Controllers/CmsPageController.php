<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CmsDirector;
use App\Models\CmsManagement;
use App\Models\Topic;
use App\Models\CmsSociety;
use App\Models\CmsPages;
use Illuminate\Support\Facades\Blade;

class CmsPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $records = CmsManagement::where('status', 1)->where('type',1)->paginate(5);
        if ($request->ajax()) {
            return view('frontend.whats-new', compact(['records']));
        }
        $topics = Topic::where('status', 1)->get();
        $slides = \App\Models\Slide::all();
        $emrgencyText = CmsManagement::where('type', 0)->first();
        return view('frontend.home', compact(['records', 'topics','slides','emrgencyText']));
    }

    public function about()
    {
        $body = CmsPages::where('title', 'about-ceo')->first();
        return view('frontend.about', compact(['body']));
    }

    public function outline()
    {
        $body = CmsPages::where('title', 'about-outline')->first();
        return view('frontend.outline', compact(['body']));
    }

    public function history(Request $request)
    {
        $records = CmsSociety::where('cms_society_enabled', 1)->orderBy('cms_society_sortnum', 'asc')->get();
        if ($request->ajax()) {
            return view('frontend.history-list', compact(['records']));
        }
        return view('frontend.history', compact(['records']));
    }

    public function admission()
    {
        return view('frontend.admission');
    }

    public function ethics()
    {
        $body = CmsPages::where('title', 'about-ethics')->first();
        return view('frontend.ethics', compact(['body']));
    }

    public function directorsAndOfficers(Request $request)
    {
        $records = CmsDirector::all();
        if ($request->ajax()) {
            return view('frontend.directors-and-officers-list', compact(['records']));
        }
        return view('frontend.directors-and-officers', compact(['records']));
    }

    public function memberIntroduction()
    {
        return view('frontend.member-introduction');
    }

    public function whatJahid()
    {
        return view('frontend.what-is-jahid');
    }

    public function market()
    {
        return view('frontend.market');
    }

    public function recruit()
    {
        return view('frontend.recruit');
    }

}
