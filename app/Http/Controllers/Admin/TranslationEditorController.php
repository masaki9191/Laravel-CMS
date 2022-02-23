<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class TranslationEditorController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($type = 'en')
    {
        $content = File::get(resource_path("/lang/$type.json"));
        return view('admin.translation_editor.index', compact(['content', 'type']));
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
        File::put(resource_path("/lang/$type.json"),$request->get('content'));
        session()->flash('success', 'Translation updated successfully');
        return redirect()->back();
    }

}
