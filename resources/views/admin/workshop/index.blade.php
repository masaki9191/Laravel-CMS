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
        @role('super-admin')
        <div class="menu-buttons">
            <a class="btn-primary" href="{{ route('workshop.index') }}">All</a>
            @foreach(App\Models\Master::all() as $type)
            @if($type->ken)
            <a class="btn-primary {{ request()->get('master_id')==$type->id ? 'active':'' }}" href="{{ route('workshop.index',['master_id'=>$type->id,'type'=>request()->get('type')]) }}">{{ $type->ken }}</a>
            @endif
            @endforeach
        </div>
        @endrole
        <div class="block-header">
            <h3 class="block-title">{{ __('Workshop') }}</h3>
            <div class='pull-right'><a href='{{ route('workshop.create',['master_id'=>request()->get('master_id')]) }}' class='btn btn-primary' >{{ __('Add') }}</a></div>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th>{{ __('Workshop number') }}</th>
                        <th>{{ __('都道府県') }}</th>
                        <th>{{ __('Organizer') }}</th>
                        <th>{{ __('Supporters') }}</th>
                        <th>{{ __('Venue name') }}</th>
                        <th>{{ __('Venue TEL') }}</th>
                        <!--<th>{{ __('Venue map URL') }}</th>-->
                        <th style="width: 10%;">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($workshops as $workshop)
                    <tr>
                        <td>{{ $workshop->no }}</td>
                        <td>{{ $workshop->ken }}</td>
                        <td>{{ $workshop->syusai }}</td>
                        <td>{{ $workshop->sien }}</td>
                        <td>{{ $workshop->kaizyou1 }}</td>
                        <td>{{ $workshop->kaizyou4 }}</td>
                        <td>
                            <a href="{{ route('workshop.edit',$workshop->id) }}">{{ __('Edit') }}</a>
                            <a href="javascript:void(0)"  data-toggle="modal" data-target="#delete-modal" class="ml-1 open-delete-popup" data-url="{{ route('workshop.destroy',$workshop->id) }}">{{ __('Delete') }}</a>
                            <a href="{{ route('workshopRegistration.index',['kensyu_id'=>$workshop->id]) }}">{{ __('View') }}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
