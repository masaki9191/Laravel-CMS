<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CmsDirectorRequest;
use App\Models\CmsDirector;

//use App\Models\Media;
//use App\Traits\ImportTrait;


class CmsDirectorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = CmsDirector::orderBy('id', 'desc')->get();
        return view('admin.cms_director.index', compact(['directors']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $director = new CmsDirector();
        return view('admin.cms_director.create',compact(['director']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CmsDirectorRequest $request)
    {
        $validated = $request->validated();

        $input = $request->all();

        $director = CmsDirector::create($input);
       
        session()->flash('success', 'Director successfully created!');
        return redirect()->route('cmsDirector.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $director = CmsDirector::findOrFail($id);
        return view('admin.cms_director.show', compact(['director']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $director = CmsDirector::findOrFail($id);
        return view('admin.cms_director.edit', compact(['director']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CmsDirectorRequest $request, $id)
    {
        $director = CmsDirector::findOrFail($id);
        $validated = $request->validated();

        $input = $request->all();
        
        $director->fill($input)->save();
       
        session()->flash('success', 'Director successfully updated!');
        return redirect()->route('cmsDirector.index');
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
            $director = CmsDirector::findOrFail($id);

            $director->delete();

            session()->flash('success', 'Director successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

}
