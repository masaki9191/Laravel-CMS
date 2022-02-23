@extends('layouts.frontend')
@section('content')
<div class="page-body bg-gray">
    <section id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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
                            <li  class="{{ request()->is('user/news') ? 'active':'' }}"><a href="{{ route('frontend.user.news') }}">会員専用ニュース</a></li>
                            <li ><a href="#">消費税関連</a></li>
                            <li  class="{{ request()->is('user') || request()->is('user/*') && !request()->is('user/news') ? 'active':'' }}"><a href="{{ route('frontend.user') }}">会員登録情報変更</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        @yield('body-content')
    </section>
</div>

@endsection