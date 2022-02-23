<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MediaRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Media;
use App\Traits\ImportTrait;

//use App\Models\Media;
//use App\Traits\ImportTrait;


class MediaController extends Controller
{
     use ImportTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::orderBy('id', 'desc')->get();
        return view('admin.media.index', compact(['media']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MediaRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasfile('files')) {
            $this->insertFormMedia($request->file('files'), 'media');
        }

        session()->flash('success', 'Media successfully created!');
        return redirect()->route('media.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $media = Media::findOrFail($id);
        return view('admin.media.show', compact(['media']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $media = Media::findOrFail($id);
        return view('admin.media.edit', compact(['media']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CmsPagesRequest $request, $id)
    {
        $media = Media::findOrFail($id);
        $validated = $request->validated();

        $input = $request->all();

        $page->fill($input)->save();

        session()->flash('success', 'Media successfully updated!');
        return redirect()->route('media.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $media = Media::findOrFail($id);

            $media->delete();

            session()->flash('success', 'Media successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

}
