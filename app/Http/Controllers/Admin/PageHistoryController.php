<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\CmsPages;
use App\Models\PageHistory;

class PageHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pageId)
    {
        $histories = PageHistory::where('page_id', $pageId)->orderBy('id', 'desc')->get();
        return view('admin.page_history.index', compact(['histories']));
    }

    public function show($historyId)
    {
        $history = PageHistory::find($historyId);
        return view('admin.page_history.show', compact(['history']));
    }

    public function restore($historyId)
    {
        $history = PageHistory::find($historyId);
        $page = CmsPages::find($history->page_id);
        $page->description = $history->description;
        $page->save();
        $history->restore_time = new \DateTime();
        $history->save();
        session()->flash('success', 'History successfully restorted!');
        return response()->json(['status' => 1, 'url' => route('cmsPages.edit', $page->id)], 200);
    }

    public function destroy($id)
    {
        try {
            $history = PageHistory::findOrFail($id);

            $history->delete();

            session()->flash('success', 'History successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

}
