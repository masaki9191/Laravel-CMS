<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkshopRegistartionRequest;
use App\Models\WorkshopRegistration;

//use App\Models\Media;
//use App\Traits\ImportTrait;


class WorkshopRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!$request->get('kensyu_id')) {
            return redirect()->route('workshop.index');
        }
        $registrations = WorkshopRegistration::where('kensyu_id', $request->get('kensyu_id'));
        $status = $request->get('status');
        switch ($status) {
            case 2:
                $registrations->where('status', '>', '1');
                break;
            case 3:
                $registrations->whereIn('status', ['2', '3']);
                break;
            case 4:
                $registrations->where('status', '>', '3');
                break;
            case 5:
                $registrations->whereIn('status', ['4', '5']);
                break;
            case 7:
                $registrations->where('seikyuu_date', '!=', '');
                break;
            default :
                if (is_numeric($status)) {
                    $registrations->where('status', $status);
                }
                break;
        }
        $registrations = $registrations->orderBy('id', 'desc')->get();
        if ($request->ajax()) {
            return view('admin.workshop_registrations.list', compact(['registrations']));
        }

        return view('admin.workshop_registrations.index', compact(['registrations']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $registration = ($request->old()) ? (object) $request->old() : new WorkshopRegistration();
        return view('admin.workshop_registrations.create', compact(['registration']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkshopRegistartionRequest $request)
    {
        $validated = $request->validated();

        $input = $request->all();
        $registration = WorkshopRegistration::create($input);

        session()->flash('success', 'Registration successfully created!');
        return redirect()->route('workshopRegistration.index', ['kensyu_id' => $request->get('kensyu_id')]);
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
        $registration = WorkshopRegistration::findOrFail($id);
        return view('admin.workshop_registrations.edit', compact(['registration']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkshopRegistartionRequest $request, $id)
    {
        $registration = WorkshopRegistration::findOrFail($id);
        $validated = $request->validated();

        $input = $request->all();

        $registration->fill($input)->save();

        session()->flash('success', 'Workshop successfully updated!');
        return redirect()->route('workshopRegistration.index', ['kensyu_id' => $registration->kensyu_id]);
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
            $workshop = WorkshopRegistration::findOrFail($id);

            $workshop->delete();

            session()->flash('success', 'Workshop successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyMultiple(Request $request)
    {
        try {
            $ids = $request->get('ids');
            if (!$ids) {
                return response()->json(['status' => 0, 'message' => 'error'], 200);
            }
            foreach ($ids as $id) {
                $workshop = WorkshopRegistration::find($id);
                if ($workshop) {
                    $workshop->delete();
                }
            }
            session()->flash('success', 'Workshop successfully deleted!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

    public function updateStatus($status, Request $request)
    {
        try {
            $ids = $request->get('ids');
            if (!$ids) {
                return response()->json(['status' => 0, 'message' => 'error'], 200);
            }

            foreach ($ids as $id) {
                $workshop = WorkshopRegistration::find($id);
                if ($workshop) {
                    switch ($status) {
                        case 2:
                            $workshop->nyuukin_date = date("Y年m月d日");
                            $workshop->status = $status;
                            break;
                        case 5:
                        case 4:
                            $workshop->nyuukin_date = date("Y年m月d日");
                            $workshop->zyukouhyou_date = date("Y年m月d日");
                            $workshop->status = $status;
                            break;
                        case 6:
                            $workshop->zyukou_date = date("Y年m月d日");
                            $workshop->status = $status;
                            break;
                        case 3:
                            $workshop->zyukouhyou_date = date("Y年m月d日");
                            $workshop->status = $status;
                            break;
                        case 8:
                            $workshop->vouchers_date = date("Y年m月d日");
                            break;
                        case 9:
                            $workshop->invoice_date = date("Y年m月d日");
                            break;
                    }

                    $workshop->touroku_date = date("Y年m月d日");
                    $workshop->save();
                }
            }

            session()->flash('success', 'Status successfully updated!');

            return response()->json(['status' => 1, 'redirect' => true], 200);
        } catch (Exception $ex) {
            return response()->json(['status' => 0], 200);
        }
    }

}
