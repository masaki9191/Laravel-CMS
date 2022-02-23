<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkshopRequest;
use App\Models\Master;

//use App\Models\Media;
//use App\Traits\ImportTrait;


class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masters = Master::orderBy('id', 'desc')->get();
        return view('admin.master.index', compact(['masters']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $workshop = ($request->old()) ? (object) $request->old() : new Workshop();
        return view('admin.workshop.create', compact(['workshop']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkshopRequest $request)
    {
        $validated = $request->validated();

        $input = $request->all();
        $workshop = Workshop::create($input);

        session()->flash('success', 'Workshop successfully created!');
        return redirect()->route('workshop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workshop = Workshop::findOrFail($id);
        return view('admin.workshop.show', compact(['workshop']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workshop = Workshop::findOrFail($id);
        return view('admin.workshop.edit', compact(['workshop']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkshopRequest $request, $id)
    {
        $workshop = Workshop::findOrFail($id);
        $validated = $request->validated();

        $input = $request->all();

        $workshop->fill($input)->save();

        session()->flash('success', 'Workshop successfully updated!');
        return redirect()->route('workshop.index');
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
            $workshop = Workshop::findOrFail($id);

            $workshop->delete();

            session()->flash('success', 'Workshop successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

}
