@extends('frontend.workshops.continous-workshop')
@section('page-body')
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
<form class="workshop-form" method="post" action="{{ route('frontend.workshop.store') }}">
     @csrf
    <section id="content1" class="bg-white form-fields" style="display: block">
        @include('frontend.workshops.continous.form-fields')
    </section>
    <section id="content2" class="bg-white form-preview" style="display: none">
        @include('frontend.workshops.continous.preview')
    </section>
    <input type="hidden" name="formdata" id="formdata" value="0">
</form>
@endsection

@section('js_after')
<script src="{{ asset('/front-pages/js/page/workshop_registration_form.js') }}"></script>
@endsection