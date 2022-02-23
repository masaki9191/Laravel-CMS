

@extends('layouts.backend')

@section('css_before')
<link rel="stylesheet" href="{{asset('js/plugins/flatpickr/flatpickr.min.css')}}">
<link rel="stylesheet" href="{{asset('js/plugins/summernote/summernote-bs4.min.css')}}">
@endsection

@section('js_after')

@endsection


@section('content')
<!-- Page Content -->
<div class="content">
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">{{ __('Continous workshop settings') }}</h3>
        </div>
        <div class="block-content block-content-full">
            @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <form method="post" enctype="multipart/form-data" action="{{ route('continousWorkhopSettings.store') }}">
                @csrf
                <div class="form-group">
                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" value="1" id="example-sw-custom1" name="type" {{ $continousWorkshop ? 'checked':'' }}>
                        <label class="custom-control-label" for="example-sw-custom1">{{ __('Online') }}</label>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-12'>
                        <button type='submit' class="btn btn-primary pull-right">{{ __('Submit') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->
</div>
<!-- END Page Content -->
@endsection
