<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CmsNewsRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\CmsConference;
use App\Traits\ImportTrait;

//use App\Models\Media;
//use App\Traits\ImportTrait;


class CmsConferenceController extends Controller
{

    use ImportTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conferences = CmsConference::orderBy('cms_conference_id', 'desc');
        if(request()->get('type')){
            $conferences = $conferences->where('cms_conference_type',request()->get('type'));
        }
        $conferences = $conferences->get();
        return view('admin.cms_conference.index', compact(['conferences']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $conference = new CmsConference();
        return view('admin.cms_conference.create', compact(['conference']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        $conference = CmsConference::create($input);

        if ($request->hasfile('file')) {
            $this->insertMedia($request->file('file'), CmsConference::storageDisk, $conference);
        }

        session()->flash('success', 'Conference successfully created!');
        return redirect()->route('cmsConference.index');
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
        $conference = CmsConference::with('model')->findOrFail($id);
        return view('admin.cms_conference.edit', compact(['conference']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $conference = CmsConference::findOrFail($id);
       // $validated = $request->validated();

        $input = $request->all();

        $conference->fill($input)->save();
        if ($request->hasfile('file')) {
            $this->insertMedia($request->file('file'), CmsConference::storageDisk, $conference);
        }
        session()->flash('success', 'Conference successfully updated!');
        return redirect()->route('cmsConference.index');
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
            $conference = CmsConference::findOrFail($id);

            $conference->delete();

            session()->flash('success', 'Conference successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

}
