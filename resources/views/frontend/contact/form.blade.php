@extends('layouts.frontend')
@section('content')
<div class="page-body bg-gray">
    <section id="page-header">
        <div class="mini_header_bar">
            <p class="float-right"> TOP ＞ <a href=''>協会紹介</a></p>
        </div>
        <div class="bg_white_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordian_custom">
                            <p><b>お問い合わせ</b></p>
                            <p>Contact</p>
                            <div class='divider'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form class="contact-form" method="post" action="{{ route('frontend.contact.store') }}">
        @csrf

        <section id="content" class="bg-white">
            <div class="container form-fields" id="content1">
                @include('frontend.contact.form-fields')
            </div>
            <div class="container form-preview" id="content2" style="display: none">
                @include('frontend.contact.preview')
            </div>
        </section>
        <input type="hidden" name="formdata" id="formdata" value="0">
    </form>
</div>

@endsection
@section('js_after')
<script src="{{ asset('/front-pages/js/page/contact_us_form.js') }}"></script>
@endsection
