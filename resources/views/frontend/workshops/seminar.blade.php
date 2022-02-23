@extends('frontend.workshops-layout')
@section('jp_title') セミナー @endsection
@section('title') Seminar @endsection
@section('page-content')
<section id="content" style="background:#cdd6dd">
    <div>
        @yield('banner_section')
    </div>
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <div class="row about-intro">
                    <div class="col-sm-4 pb-2 text">
                        <div class="p-2 {{ request()->is('seminar/outline')? 'active':'' }}">
                            <a href="{{ route('frontend.seminar.outline') }}"><h4 class="tabfont">開催一覧<span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></h4></a>
                        </div>
                    </div>

                    <div class="col-sm-4 pb-2 text">
                        <div class="p-2 {{ request()->is('seminar/events')? 'active':'' }}">
                            <a href="{{ route('frontend.seminar.events') }}"><h4 class="tabfont">資料ダウンロード<span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@yield('page-body')
@endsection