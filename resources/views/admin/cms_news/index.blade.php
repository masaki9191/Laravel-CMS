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
            <h3 class="block-title">ニュース管理</h3>
            <div class='pull-right'><a href='{{ route('cmsNews.create',['type'=>request()->get('type')]) }}' class='btn btn-primary' >{{ __('Add') }}</a></div>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th>{{ __('Title') }}</th>
                        <th>{{ __('File') }}</th>
                        <th>{{ __('News date') }}</th>
                        <th style="width: 10%;">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($news as $ne)
                    <tr>
                        <td>{{ $ne->title }}</td>
                        <td>  @if ($ne->model->count())
                            <a href="{{ $ne->model[0]->media_url }}" target="_blank">{{ __('Click here') }}</a>
                            @endif
                        </td>
                        <td>{{ $ne->news_date }}</td>
                        <td>
                            <a href="{{ route('cmsNews.edit',$ne->id) }}">{{ __('Edit') }}</a>
                            <a href="javascript:void(0)"  data-toggle="modal" data-target="#delete-modal" class="ml-1 open-delete-popup" data-url="{{ route('cmsNews.destroy',$ne->id) }}">{{ __('Delete') }}</a>
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
