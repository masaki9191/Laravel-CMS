<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CmsPagesRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\CmsPages;
use App\Models\PageHistory;

//use App\Models\Media;
//use App\Traits\ImportTrait;


class CmsPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = CmsPages::orderBy('id', 'desc')->get();
        return view('admin.cms_pages.index', compact(['pages']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $page = new CmsPages();
        return view('admin.cms_pages.create', compact(['page']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CmsPagesRequest $request)
    {
        $validated = $request->validated();

        $input = $request->all();

        $page = CmsPages::create($input);

        session()->flash('success', 'Page successfully created!');
        return redirect()->route('cmsPages.edit', $page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = CmsPages::findOrFail($id);
        return view('admin.cms_pages.show', compact(['page']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = CmsPages::findOrFail($id);
        return view('admin.cms_pages.edit', compact(['page']));
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
        $page = CmsPages::findOrFail($id);
        $validated = $request->validated();

        $input = $request->all();
 
        $page->fill($input)->save();

        session()->flash('success', 'Page successfully updated!');
        return redirect()->route('cmsPages.edit', $page->id);
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
            $cmsPages = CmsPages::findOrFail($id);

            $cmsPages->delete();

            session()->flash('success', 'Page successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

    public function pageByTitle(Request $request, $title)
    {

        $cmsPages = CmsPages::where('title', $title)->first();
        if ($cmsPages) {
            return redirect()->route('cmsPages.edit', $cmsPages->id);
        }
        return redirect()->route('cmsPages.create');
    }

}
