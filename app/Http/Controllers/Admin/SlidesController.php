<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SlidesRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Media;
use App\Models\Slide;
use App\Traits\ImportTrait;

//use App\Models\Media;
//use App\Traits\ImportTrait;


class SlidesController extends Controller
{

    use ImportTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::orderBy('id', 'desc')->get();
        return view('admin.slides.index', compact(['slides']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $slide = new Slide();
        return view('admin.slides.create',compact(['slide']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SlidesRequest $request)
    {


        $validated = $request->validated();

        $input = $request->all();

        $slide = Slide::create($input);

        if ($request->hasfile('file')) {
            $this->insertMedia($request->file('file'), Slide::storageDisk, $slide);
        }

        session()->flash('success', 'Slides successfully created!');
        return redirect()->route('slides.index');
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
        return view('admin.slides.show', compact(['media']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = Slide::findOrFail($id);
        return view('admin.slides.edit', compact(['slide']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SlidesRequest $request, $id)
    {
        $slide = Slide::findOrFail($id);
        $validated = $request->validated();

        $input = $request->all();

        $slide->fill($input)->save();
        if ($request->hasfile('file')) {
            $this->insertMedia($request->file('file'), Slide::storageDisk, $slide);
        }
        session()->flash('success', 'Slides successfully updated!');
        return redirect()->route('slides.index');
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
            $media = Slide::findOrFail($id);

            $media->delete();

            session()->flash('success', 'Slides successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

}
