<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkshopRequest;
use App\Models\CmsKaiin;

//use App\Models\Media;
//use App\Traits\ImportTrait;


class CmsKaiinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kaiin = CmsKaiin::where('cms_kaiin_class', 0)->get();
        if (request()->get('type') && request()->get('type') == 'member') {
            $cms_kaiin_class = 1;
            $kaiin = CmsKaiin::where('cms_kaiin_class', $cms_kaiin_class);
            if (request()->get('conferenceType')) {

                $kaiin->whereHas('conferenceTypes', function($query) {
                    $query->where('cms_conference_type_id', request()->get('conferenceType'));
                });
            }
          $kaiin = $kaiin->get();
        }




        return view('admin.cms_kaiin.index', compact(['kaiin']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //  $this->authorize('create', Workshop::class);
        $kaiin = ($request->old()) ? (object) $request->old() : new CmsKaiin();
        return view('admin.cms_kaiin.create', compact(['kaiin']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->authorize('create', Workshop::class);
        // $validated = $request->validated();

        $input = $request->all();
        $kaiin = CmsKaiin::create($input);
        if ($request->get('cms_conference')) {
            $kaiin->conferenceTypes()->sync($request->get('cms_conference'));
        }
        session()->flash('success', 'Kaiin successfully created!');
        if ($kaiin->cms_kaiin_class == 1) {
            return redirect()->route('cmsKaiin.index', ['type' => 'member']);
        }
        return redirect()->route('cmsKaiin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kaiin = CmsKaiin::findOrFail($id);
        return view('admin.cms_kaiin.show', compact(['kaiin']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kaiin = CmsKaiin::with('conferenceTypes')->findOrFail($id);
        //    $this->authorize('update', $workshop);
        return view('admin.cms_kaiin.edit', compact(['kaiin']));
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
        $kaiin = CmsKaiin::findOrFail($id);
        // $this->authorize('update', $workshop);
        //   $validated = $request->validated();

        $input = $request->all();

        $kaiin->fill($input)->save();
        if ($request->get('cms_conference')) {
            $kaiin->conferenceTypes()->sync($request->get('cms_conference'));
        }

        session()->flash('success', 'Kaiin successfully updated!');
        if ($kaiin->cms_kaiin_class == 1) {
            return redirect()->route('cmsKaiin.index', ['type' => 'member']);
        }
        return redirect()->route('cmsKaiin.index');
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
            $kaiin = CmsKaiin::findOrFail($id);
            $kaiin->delete();

            session()->flash('success', 'Kaiin successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

}
