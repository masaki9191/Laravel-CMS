<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\CmsKaiin;
use App\Models\CmsReservation;
use App\Models\CmsConference;

class CmsReservationController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($conferenceId)
    {
        $conference = CmsConference::find($conferenceId);
        $presentCount = CmsReservation::where('cms_conference_id', $conferenceId)->where('cms_reservation_attend', 1)->count();
        $abesentCount = CmsReservation::where('cms_conference_id', $conferenceId)->where('cms_reservation_attend', 2)->count();
        $totalCount = CmsReservation::where('cms_conference_id', $conferenceId)->count();
        $unconfirmedCount = $totalCount - ($presentCount + $abesentCount);
        $kaiin = CmsKaiin::with('conferenceReservation')->where('cms_kaiin_class', 1)->whereHas('conferenceTypes', function($query) use ($conference) {
                $query->cms_conference_type_id = $conference->cms_conference_type;
            })->get();
        return view('admin.cms_reservation.index', compact(['kaiin', 'conferenceId', 'presentCount', 'unconfirmedCount', 'abesentCount', 'totalCount']));
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
        $formData = $input['form_data'];
        foreach ($formData as $data) {
            if (isset($data['cms_reservation_attend'])) {
                $reservation = CmsReservation::where('cms_reservation_id', $data['reservation_id'])->first();
                if (!$reservation) {
                    $reservation = new CmsReservation();
                }
                $reservation->cms_reservation_attend = $data['cms_reservation_attend'];
                $reservation->cms_conference_id = $input['cms_conference_id'];
                $reservation->cms_kaiin_id = $data['cms_kaiin_id'];
                $reservation->save();
            }
        }

        session()->flash('success', 'Marked successfully!');
        return redirect()->route('cmsReservation.index', ['conferenceId' => $input['cms_conference_id']]);
    }

}
