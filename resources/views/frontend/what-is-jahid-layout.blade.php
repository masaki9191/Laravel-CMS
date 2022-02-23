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
                            <li class="{{ request()->is('whatJahid') ? 'active':'' }}"><a href="{{ route('frontend.whatJahid') }}">概要</a></li>
                            <li class="{{ request()->is('market')  ? 'active':'' }}"><a href="{{ route('frontend.market') }}">市場環境</a></li>
                            <li class="{{ request()->is('recruit') ? 'active':'' }}"><a href="{{ route('frontend.recruit') }}">就活生のみなさま</a></li>
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