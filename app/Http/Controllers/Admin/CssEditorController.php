<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CssEditorController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($type = 'admin')
    {
        if ($type == 'admin') {
            $content = File::get(public_path('/css/style-custom.css'));
        }
        if ($type == 'front') {
            $content = File::get(public_path('/front-pages/css/style.css'));
        }
        return view('admin.css_editor.index', compact(['content', 'type']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = $request->get('type');
        if ($type == 'admin') {
            File::put(public_path('/css/style-custom.css'), $request->get('content'));
        }
        if ($type == 'front') {
            File::put(public_path('/front-pages/css/style.css'), $request->get('content'));
        }
        session()->flash('success', 'Css updated successfully');
        return redirect()->back();
    }

}
