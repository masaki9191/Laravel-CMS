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
        @if (request()->get('type') == 'member')
        <ul>
            <li><a href="{{ route('cmsKaiin.index',['type'=>'member']) }}">All</a></li>
            @foreach(App\Models\CmsConferenceType::all() as $type)
            <li class="{{ request()->get('type')==$type->id ? 'active':'' }}"><a href="{{ route('cmsKaiin.index',['type'=>'member','conferenceType'=>$type->id]) }}">{{ $type->name }}</a></li>
            @endforeach
        </ul>
        @endif
        <div class="block-header">
            <h3 class="block-title">{{ __('CMS KAIIN') }}</h3>
            <div class='pull-right'><a href='{{ route('cmsKaiin.create',['type'=>request()->get('type')]) }}' class='btn btn-primary' >{{ __('Add') }}</a></div>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th>{{ __('Cms member no') }}</th>
                        <th>{{ __('Cms kaiin name1') }}</th>
                        @if (request()->get('type') == 'member')
                        <th>{{ __('Company name') }}</th>
                        @endif
                        <!--<th>{{ __('Venue map URL') }}</th>-->
                        <th style="width: 10%;">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kaiin as $k)
                    <tr>
                        <td>{{ $k->cms_member_no }}</td>
                        <td>{{ $k->cms_kaiin_name1 }}</td>
                        @if (request()->get('type') == 'member')
                        <td>
                            <ul>
                                @foreach($k->conferenceTypes as $type)
                                <li>{{ $type->name }} </li>
                                @endforeach
                            </ul>
                        </td>
                        @endif
                        <td>
                            <a href="{{ route('cmsKaiin.edit',$k->cms_kaiin_id) }}">{{ __('Edit') }}</a>
                            <a href="javascript:void(0)"  data-toggle="modal" data-target="#delete-modal" class="ml-1 open-delete-popup" data-url="{{ route('cmsKaiin.destroy',$k->cms_kaiin_id) }}">{{ __('Delete') }}</a>
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
