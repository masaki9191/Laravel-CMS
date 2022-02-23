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
use App\Models\ContactUs;

class ContactController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        return view('frontend.contact.form');
    }

   
     public function confirmation()
    {
        return view('frontend.contact.confirmation');
    }

       public function store(Request $request)
    {

        $input = $request->all();
        $contact = ContactUs::create($input);

        session()->flash('success', 'Message sent!');
        return redirect()->route('frontend.contact.confirmation');
    }

}
