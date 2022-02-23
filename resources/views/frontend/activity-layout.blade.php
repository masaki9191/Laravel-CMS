@extends('layouts.frontend')
@section('content')
<div class="page-body bg-gray">
    <section id="page-header">
        <div class="mini_header_bar">
            @yield('breadcurmb-section')
        </div>
        <div class="bg_white_header" style="border-bottom:none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordian_custom">
                            <h2>@yield('jp_title')</h2>
                            <p>@yield('title')</p>
                            <div class='divider'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation">
            <div class="container">
                <div class="">
                    <div class="">
                        <ul>
                            <li class="{{ request()->is('activity') ? 'active':'' }}"><a href="{{ route('frontend.activity') }}">活動報告</a></li>
                            <li class="{{ request()->is('disaster') ? 'active':'' }}"><a href="{{ route('frontend.disaster') }}">災害対策マニュアル</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @yield('container-section')
    </section>

    <section id="content" class="bg-white">
        @yield('body-content')
    </section>
</div>

@endsection