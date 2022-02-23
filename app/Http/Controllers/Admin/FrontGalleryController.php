<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FrontGalleryRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\FrontGallery;
use App\Traits\ImportTrait;


class FrontGalleryController extends Controller
{
    use ImportTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frontGalleries = FrontGallery::orderBy('id', 'desc')->get();
        return view('admin.front_galleries.index', compact(['frontGalleries']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $gallery = new FrontGallery();
        return view('admin.front_galleries.create', compact(['gallery']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FrontGalleryRequest $request)
    {
        $validated = $request->validated();

        $input = $request->all();

        $frontGallery = FrontGallery::create($input);
        if ($request->hasfile('file')) {
            $this->insertMedia($request->file('file'), FrontGallery::storageDisk, $frontGallery);
        }

        session()->flash('success', 'Gallery successfully created!');
        return redirect()->route('frontGalleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = FrontGallery::findOrFail($id);
        return view('admin.front_galleries.show', compact(['gallery']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = FrontGallery::with('model')->findOrFail($id);
        return view('admin.front_galleries.edit', compact(['gallery']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FrontGalleryRequest $request, $id)
    {
        $frontGallery = FrontGallery::findOrFail($id);
        $validated = $request->validated();

        $input = $request->all();

        $frontGallery->fill($input)->save();
        if ($request->hasfile('file')) {
            $this->insertMedia($request->file('file'), FrontGallery::storageDisk, $frontGallery);
        }

        session()->flash('success', 'Gallery successfully updated!');
        return redirect()->route('frontGalleries.index');
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
            $frontGallery = FrontGallery::findOrFail($id);

            $frontGallery->delete();

            session()->flash('success', 'Gallery successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

}
