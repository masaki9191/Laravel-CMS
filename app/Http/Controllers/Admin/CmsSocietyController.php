<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CmsSocietyRequest;
use App\Models\CmsSociety;

//use App\Models\Media;
//use App\Traits\ImportTrait;


class CmsSocietyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $societies = CmsSociety::all();
        return view('admin.cms_society.index', compact(['societies']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $society = new CmsSociety();
        return view('admin.cms_society.create', compact(['society']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CmsSocietyRequest $request)
    {
        $validated = $request->validated();

        $input = $request->all();

        $society = CmsSociety::create($input);

        session()->flash('success', 'Director successfully created!');
        return redirect()->route('cmsSociety.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $society = CmsSociety::findOrFail($id);
        return view('admin.cms_director.show', compact(['society']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $society = CmsSociety::where('cms_society_id', $id)->first();
        return view('admin.cms_society.edit', compact(['society']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CmsSocietyRequest $request, $id)
    {
        $society = CmsSociety::where('cms_society_id', $id)->first();
        $validated = $request->validated();

        $input = $request->all();

        $society->fill($input)->save();

        session()->flash('success', 'Society successfully updated!');
        return redirect()->route('cmsSociety.index');
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
            $society = CmsSociety::findOrFail($id);

            $society->delete();

            session()->flash('success', 'Society successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

}
