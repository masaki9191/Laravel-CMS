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

class UserController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        return view('frontend.user.form');
    }

    public function confirmation()
    {
        return view('frontend.user.confirmation');
    }

    public function information()
    {
        return view('frontend.user.information');
    }
    public function news()
    {
        return view('frontend.user.news');
    }

}
