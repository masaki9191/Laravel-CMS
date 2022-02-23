@extends('layouts.frontend')
@section('content')
<div class="page-body bg-gray">
    <section id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-heading">
                    <h2>@yield('jp_title')</h2>
                    <p>@yield('title')</p>
                    <div class="divider"></div>
                </div>
            </div>
        </div>
        <div class="navigation">
            <div class="container">
                <div class="">
                    <div class="">
                        <ul>

                            <li class="{{ request()->is('about') ? 'active':'' }}"><a href="{{ route('frontend.about') }}">会長あいさつ</a></li>
                            <li class="{{ request()->is('about/outline') ? 'active':'' }}"><a href="{{ route('frontend.outline') }}">協会概要・定款</a></li>
                            <li class="{{ request()->is('about/history') ? 'active':'' }}"><a href="{{ route('frontend.history') }}">協会のあゆみ</a></li>
                            <li class="{{ request()->is('about/directors-and-officers') ? 'active':'' }}"><a href="{{ route('frontend.directors-and-officers') }}">役員紹介</a></li>
                            <li class="{{ request()->is('about/member-introduction') ? 'active':'' }}"><a href="{{ route('frontend.member-introduction') }}">会員紹介</a></li>
                            <li class="{{ request()->is('about/admission') ? 'active':'' }}"><a href="{{route('frontend.admission')}}">入会のご案内</a></li>
                            <li class="{{ request()->is('about/ethics') ? 'active':'' }}"><a href="{{route('frontend.ethics')}}">企業倫理行動指針</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>


    <section id="content <?php if (strpos($url,'about/') !== false) {echo "other-pages";}?>" class="<?php if (strpos($url,'about/') == false) {echo "ceo-page";}?>">
    @yield('about-content')
    </section>
</div>

@endsection
