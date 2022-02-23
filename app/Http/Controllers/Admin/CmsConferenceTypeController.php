<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CmsConferenceTypeRequest;
use App\Models\CmsConferenceType;

//use App\Models\Media;
//use App\Traits\ImportTrait;


class CmsConferenceTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = CmsConferenceType::orderBy('id', 'desc')->get();
        return view('admin.conference_type.index', compact(['types']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = new CmsConferenceType();
        return view('admin.conference_type.create',compact(['type']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CmsConferenceTypeRequest $request)
    {
        $validated = $request->validated();

        $input = $request->all();

        $type = CmsConferenceType::create($input);
       
        session()->flash('success', 'Type successfully created!');
        return redirect()->route('conferenceType.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = CmsConferenceType::findOrFail($id);
        return view('admin.conference_type.edit', compact(['type']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CmsConferenceTypeRequest $request, $id)
    {
        $type = CmsConferenceType::findOrFail($id);
        $validated = $request->validated();

        $input = $request->all();
        
        $type->fill($input)->save();
       
        session()->flash('success', 'Type successfully updated!');
        return redirect()->route('conferenceType.index');
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
            $type = CmsConferenceType::findOrFail($id);

            $type->delete();

            session()->flash('success', 'Type successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

}
