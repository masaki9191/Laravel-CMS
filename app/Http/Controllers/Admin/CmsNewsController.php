<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CmsNewsRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\CmsNews;
use App\Traits\ImportTrait;

//use App\Models\Media;
//use App\Traits\ImportTrait;


class CmsNewsController extends Controller
{

    use ImportTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->get('type')) {
            $news = CmsNews::where('type', request()->get('type'))->orderBy('id', 'desc')->get();
        } else {
            $news = CmsNews::orderBy('id', 'desc')->get();
        }
        return view('admin.cms_news.index', compact(['news']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $news = new CmsNews();
        return view('admin.cms_news.create', compact(['news']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CmsNewsRequest $request)
    {
        $validated = $request->validated();

        $input = $request->all();

        $news = CmsNews::create($input);

        if ($request->hasfile('file')) {
            $this->insertMedia($request->file('file'), CmsNews::storageDisk, $news);
        }

        session()->flash('success', 'News successfully created!');
        return redirect()->route('cmsNews.index',['type'=>$news->type]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = CmsNews::with('media')->findOrFail($id);

        return view('admin.cms_news.show', compact(['news']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = CmsNews::with('model')->findOrFail($id);
        return view('admin.cms_news.edit', compact(['news']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CmsNewsRequest $request, $id)
    {
        $news = CmsNews::findOrFail($id);
        $validated = $request->validated();

        $input = $request->all();

        $news->fill($input)->save();
        if ($request->hasfile('file')) {
            $this->insertMedia($request->file('file'), CmsNews::storageDisk, $news);
        }
        session()->flash('success', 'News successfully updated!');
        return redirect()->route('cmsNews.index',['type'=>$news->type]);
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
            $news = CmsNews::findOrFail($id);

            $news->delete();

            session()->flash('success', 'News successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

}
