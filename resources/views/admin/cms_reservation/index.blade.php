@extends('layouts.backend')

@section('css_before')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
@endsection

@section('js_after')
<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection

@section('content')
<!-- Page Content -->
<div class="content">
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">{{ __('Cms Reservations') }}</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{ route('cmsReservation.store') }}" method="post">
                @csrf
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th>{{ __('Cms member no') }}</th>
                            <th>{{ __('Cms kaiin name1') }}</th>
                            <th>{{ __('Attendance Status') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kaiin as $key=>$k)
                        <tr>

                            <td>{{ $k->cms_member_no }}</td>
                            <td>{{ $k->cms_kaiin_name1 }}</td>
                            <td>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="example-radios-inline1" name="form_data[{{$key}}][cms_reservation_attend]" value="1" {{ $k->checkConferenceReservation($conferenceId) && $k->checkConferenceReservation($conferenceId)->cms_reservation_attend == 1 ? 'checked':''  }}>
                                        <label class="form-check-label" for="example-radios-inline1">Attend</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="example-radios-inline2" name="form_data[{{$key}}][cms_reservation_attend]" value="2" {{ $k->checkConferenceReservation($conferenceId) && $k->checkConferenceReservation($conferenceId)->cms_reservation_attend == 2 ? 'checked':''  }}>
                                        <label class="form-check-label" for="example-radios-inline2">Absence</label>
                                    </div>
                                </div>
                                <input type="hidden" name='cms_conference_id' value='{{ $conferenceId }}'>
                                <input type="hidden" name='form_data[{{$key}}][reservation_id]' value='{{ $k->checkConferenceReservation($conferenceId) ?  $k->checkConferenceReservation($conferenceId)->cms_reservation_id:0 }}'>
                                <input type="hidden" name='form_data[{{$key}}][cms_kaiin_id]' value='{{ $k->cms_kaiin_id }}'>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class='row'>
                    <div class='col-md-12 text-center'>
                        <button type='submit' class="btn btn-primary">{{ __('Submit') }}</button>
                    </div>
                    <div class='col-md-12 text-right'>
                        <div><b>Present:-</b>{{$presentCount}}</div>
                        <div><b>Absent:-</b>{{$abesentCount}}</div>
                        <div><b>Unconfirmed:-</b>{{$unconfirmedCount}}</div>
                        <div><b>Total:-</b>{{$totalCount}}</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->
</div>

<div class="modal fade" id="delete-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure? you want to delete it</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button"  data-csrf_token="{{ csrf_token() }}" class="btn btn-primary delete-record">Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->
@endsection
