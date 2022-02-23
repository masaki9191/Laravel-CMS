@extends('frontend.workshops.other-workshop')
@section('page-body')
<section id="content1" class="bg-white form-fields" style="display: block">
    @include('frontend.workshops.others.form-fields')
</section>
<section id="content2" class="bg-white form-preview" style="display: none">
    @include('frontend.workshops.others.preview')
</section>

@endsection

@section('js_after')
<script>
    $(function () {
        $('#content1').on('click','.form-preview-btn', function () {
             $('.form-fields').hide();
             $('.form-preview').show();
        });
         $('#content2').on('click','.show-form-btn', function () {
              $('.form-preview').hide();
             $('.form-fields').show();
            
        });
    });
</script>
@endsection