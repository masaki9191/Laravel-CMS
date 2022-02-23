<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CmsManagementRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\CmsManagement;
use App\Traits\ImportTrait;

//use App\Models\Media;
//use App\Traits\ImportTrait;


class CmsManagementController extends Controller
{

    use ImportTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $management = CmsManagement::where('type', 1)->orderBy('id', 'desc')->get();
        return view('admin.cms_management.index', compact(['management']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $management = new CmsManagement();
        return view('admin.cms_management.create', compact(['management']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CmsManagementRequest $request)
    {
        $validated = $request->validated();

        $input = $request->all();

        $management = CmsManagement::create($input);
        if ($request->hasfile('file')) {
            $this->insertMedia($request->file('file'), CmsManagement::storageDisk, $management);
        }

        session()->flash('success', 'Management successfully created!');
        return redirect()->route('cmsManagement.edit',$management->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $management = CmsManagement::findOrFail($id);
        return view('admin.cms_management.show', compact(['management']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $management = CmsManagement::with('model')->findOrFail($id);
        return view('admin.cms_management.edit', compact(['management']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CmsManagementRequest $request, $id)
    {
        $management = CmsManagement::findOrFail($id);
        $validated = $request->validated();

        $input = $request->all();

        $management->fill($input)->save();
        if ($request->hasfile('file')) {
            $this->insertMedia($request->file('file'), CmsManagement::storageDisk, $management);
        }

        session()->flash('success', 'Management successfully updated!');
        return redirect()->route('cmsManagement.edit',$management->id);
    }

    public function emergencyText()
    {
        $emrgencyText = CmsManagement::where('type', 0)->first();
        if ($emrgencyText) {
            return redirect()->route('cmsManagement.edit', $emrgencyText->id);
        } else {
            return redirect()->route('cmsManagement.create', ['type' => 0]);
        }
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
            $management = CmsManagement::findOrFail($id);

            $management->delete();

            session()->flash('success', 'Management successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

}
