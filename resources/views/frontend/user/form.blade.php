@extends('frontend.user-layout')
@section('jp_title') 会員登録情報変更 @endsection
@section('title')My Page @endsection
@section('body-content')
<div class="container form-fields" id="content1">
    @include('frontend.user.form-fields')
</div>
<div class="container form-preview" id="content2" style="display: none">
    @include('frontend.user.preview')
</div>

@endsection

@section('js_after')
<script>
    $(function () {
        $('#content1').on('click', '.form-preview-btn', function () {
            $('.form-fields').hide();
            $('.form-preview').show();
        });
        $('#content2').on('click', '.show-form-btn', function () {
            $('.form-preview').hide();
            $('.form-fields').show();

        });
    });
</script>
@endsection