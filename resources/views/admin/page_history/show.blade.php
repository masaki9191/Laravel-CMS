@extends('layouts.backend')

@section('css_before')
<link rel="stylesheet" href="{{asset('js/plugins/summernote/summernote-bs4.min.css')}}">
@endsection

@section('js_after')
<!--<script src="{{asset('js/plugins/ckeditor5-classic/build/ckeditor.js')}}"></script>
<script src="{{asset('js/plugins/ckeditor/ckeditor.js')}}"></script>-->
<script src="{{asset('js/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- Page JS Helpers (CKEditor 5 plugins) -->
<script>jQuery(function () {
    One.helpers(['summernote']);
    jQuery(function ($) {
        $('body').on('click', '.restore-record', function () {
            var url = $(this).data('url');
            var csrfToken = $(this).data('csrf_token');
            var self = $(this);
            $.ajax({
                type: 'put',
                url: url,
                data: {
                    '_token': csrfToken,
                },
                success: function (response) {
                    if (response.status) {
                        window.location.href = response.url;
                    } else {
                        alert('Error!');
                    }
                    $('.restore-record').data('url', "");
                    $('#restore-record').modal('hide');
                }
            });
        });

        $('body').on('click', '.open-restore-popup', function () {
            $('.restore-record').data('url', $(this).data('url'));
        });
    });

});</script>

@endsection


@section('content')
<!-- Page Content -->
<div class="content">
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">{{ __('History') }}</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="form-group">
                <label for="description">{{ __('Description') }}</label>
                <textarea class="form-control js-summernote" rows="40" name="description">{{ $history->description ?? '' }}</textarea>
            </div>
            <div class='col-md-12'>
                <button type='button'  data-toggle="modal" data-target="#restore-modal" data-url="{{ route('pageHistory.restore',$history->id) }}" class="btn btn-primary open-restore-popup">{{ __('Restore') }}</button>
                <a href="{{ route('pageHistory.index',$history->page_id) }}" class="btn btn-primary">{{ __('Back') }}</a>
            </div>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->
</div>

<div class="modal fade" id="restore-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Restore</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure? you want to restore it</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button"  data-csrf_token="{{ csrf_token() }}" class="btn btn-primary restore-record">Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->
@endsection
