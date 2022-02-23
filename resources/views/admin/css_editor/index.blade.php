

@extends('layouts.backend')

@section('content')
<!-- Page Content -->
<div class="content">
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">CSS編集</h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <form method="post" enctype="multipart/form-data"  action="{{ route('cssEditor.store') }}">
                @csrf
                <textarea class='form-control' name='content' rows='30'>{{ $content }}</textarea>
                <div class='row mt-2'>
                    <div class='col-md-12'>
                        <button type='submit' class="btn btn-primary pull-right">{{ __('Submit') }}</button>
                    </div>
                </div>
                <input type="hidden" value='{{ $type }}' name='type'>
            </form>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->
</div>
<!-- END Page Content -->
@endsection
