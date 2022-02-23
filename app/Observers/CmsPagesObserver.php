<?php

namespace App\Observers;

use App\Models\PageHistory;
use App\Models\CmsPages;

class CmsPagesObserver
{
    /**
     * Handle the page history "created" event.
     *
     * @param  \App\Models\PageHistory  $pageHistory
     * @return void
     */
    public function created(CmsPages $page)
    {
        $pageHistory = new PageHistory();
        $pageHistory->page_id = $page->id;
        $pageHistory->description = $page->description;
        $pageHistory->save();
    }

    public function updating(CmsPages $page)
    {
        $pageHistory = new PageHistory();
        $pageHistory->page_id = $page->id;
        $pageHistory->description = $page->getOriginal('description');
        $pageHistory->save();
    }

    /**
     * Handle the page history "updated" event.
     *
     * @param  \App\Models\PageHistory  $pageHistory
     * @return void
     */
    public function updated(CmsPages $page)
    {

    }

    /**
     * Handle the page history "deleted" event.
     *
     * @param  \App\Models\PageHistory  $pageHistory
     * @return void
     */
    public function deleted(CmsPages $page)
    {
        //
    }

    /**
     * Handle the page history "restored" event.
     *
     * @param  \App\Models\PageHistory  $pageHistory
     * @return void
     */
    public function restored(CmsPages $page)
    {
        //
    }

    /**
     * Handle the page history "force deleted" event.
     *
     * @param  \App\Models\PageHistory  $pageHistory
     * @return void
     */
    public function forceDeleted(CmsPages $page)
    {
        //
    }

}
