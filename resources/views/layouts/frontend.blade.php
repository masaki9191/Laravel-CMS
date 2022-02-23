<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - Jahid</title>
        <link rel="stylesheet" href="{{ asset('/front-pages/css/bootstrap.css') }}"/>
        <link rel="stylesheet" href="{{ asset('/front-pages/css/fontawesome.min.css') }}"/>

        <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
        <link rel="stylesheet" href="{{ asset('/front-pages/css/style.css')}}"/>


        @yield('css_after')
    </head>
    <body>
    <body class="home">
        <div class="content">
            <header id="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <a href="{{ route('frontend.home') }}" class="logo mr-auto"><img
                                    src="{{ asset('front-pages/images/logo.PNG') }}" alt="Logo"></a>
                            <div class="menu-row">
                                <div class="">
                                    <ul class="sub-menu">
                                        <li><a href="#"><i class="fa fa-chevron-right"></i> お問い合わせ </a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i> サイトマップ</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i> アクセス</a></li>
                                        <li style="padding-right:0px" ><a href="#"><i class="fa fa-chevron-right"></i> リンク</a></li>
                                    </ul>
                                </div>
                                <div class="">
                                    <nav class="nav-menu d-none d-lg-block">
                                        <ul>
                                            <li><a href="{{ route('frontend.home') }}">ホーム</a></li>
                                            <li class="drop-down">
                                                <a data-toggle="dropdown" href="{{ route('frontend.about') }}">協会紹介
                                                    <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('frontend.about') }}">会長あいさつ</a></li>
                                                    <li><a href="{{ route('frontend.outline') }}">協会概要・定款</a></li>
                                                    <li><a href="{{ route('frontend.history') }}">協会のあゆみ</a></li>
                                                    <li><a
                                                            href="{{ route('frontend.directors-and-officers') }}">役員紹介</a>
                                                    </li>
                                                    <li><a href="{{ route('frontend.member-introduction') }}">会員紹介</a>
                                                    </li>
                                                    <li><a href="{{route('frontend.admission')}}">入会のご案内</a></li>
                                                    <li><a href="{{route('frontend.ethics')}}">企業倫理行動指針</a></li>
                                                </ul>
                                            </li>
                                            <li class="drop-down">
                                                <a data-toggle="dropdown" href="#">医療機器販売業とは？
                                                    <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('frontend.whatJahid') }}">概要</a></li>
                                                    <li><a href="{{ route('frontend.market') }}">市場環境</a></li>
                                                    <li><a href="{{ route('frontend.recruit') }}">就活生のみなさま</a></li>
                                                </ul>
                                            </li>
                                            <li class="drop-down">
                                                <a data-toggle="dropdown" href="#">研修・教育<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('frontend.workshop.outline') }}">継続的研修</a></li>
                                                    <li><a href="{{ route('frontend.other.workshop.outline') }}">その他研修会</a></li>
                                                    <li><a href="{{ route('frontend.seminar.outline') }}">セミナー</a></li>
                                                    <li><a href="{{ route('frontend.workshop.cdr') }}">CDR</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('frontend.membership') }}">会議</a></li>
                                            <!-- <li><a href="#">活動紹介</a></li> -->
                                            <li class="drop-down">
                                                <a data-toggle="dropdown" href="#">活動紹介
                                                    <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('frontend.activity') }}">新着情報／活動報告</a></li>
                                                    <li><a href="{{ route('frontend.disaster') }}">災害対策マニュアル</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main>
                @yield('content')
            </main>
            <section id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="contact">
                                <h4 class="section-title">CONTACT</h4>
                                <p class="divider"></p>
                                <p>ID･パスワードをお忘れの方は事務局までお問い合わせお願いします。</p>
                                <a href="{{ route('frontend.contact') }}" class="btn btn-primary">メールでお問い合わせ <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>

                <div class="footer-1 container-fluid">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <!-- <img src="{{ asset('front-pages/images/logo-light.PNG') }}" alt="Jahid" class="footer-logo"/> -->
                            <!-- <p><small>一般社団法人</small></p> -->
                            <p>一般社団法人 日本医療機器販売業協会</p>
                            <p class="footer-text">〒113-0033 東京都文京区本郷3-39-17 KOGAビル4F</p>
                        </div>
                    </div>
                </div>
                <div class="footer-2 container-fluid">
                    <div class="row">
                        <div class=" col-md-10 col-lg-12" style="max-width: 970px; margin-left: auto; margin-right: auto;">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 class="collapsedHeading" data-toggle="collapse" data-target="#sec1">協会紹介 <i
                                            class="fas fa-minus float-right "></i></h4>
                                    <ul id="sec1" class="collapse show">
                                        <li><a href="#">会長あいさつ</a></li>
                                        <li><a href="#">協会概要・定款</a></li>
                                        <li><a href="#">協会のあゆみ</a></li>
                                        <li><a href="#">役員紹介</a></li>
                                        <li><a href="#">会員紹介</a></li>
                                        <li><a href="#">入会のご案内</a></li>
                                        <li><a href="#">企業倫理行動指針</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h4 class="collapsedHeading" data-toggle="collapse" data-target="#sec2">医療機器販売業とは <i
                                            class="fas fa-minus float-right "></i></h4>

                                    <!-- <h4>医療機器販売業とは</h4> -->
                                    <ul id="sec2" class="collapse show">
                                        <li><a href="#">概要</a></li>
                                        <li><a href="#">適正使用支援とは</a></li>
                                        <li><a href="#">就活生のみなさま</a></li>
                                    </ul>

                                    <h4 class="collapsedHeading" data-toggle="collapse" data-target="#sec3">研修・教育 <i
                                            class="fas fa-minus float-right "></i></h4>

                                    <!-- <h4>研修・教育</h4> -->
                                    <ul id="sec3" class="collapse show">
                                        <li><a href="#">継続的研修</a></li>
                                        <li><a href="#">その他の研修</a></li>
                                        <li><a href="#">セミナー</a></li>
                                        <li><a href="#">CDR</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h4>会議</h4>
                                    <ul>
                                        <li><a href="#">会議一覧</a></li>
                                    </ul>
                                    <h4>活動紹介</h4>
                                    <ul>
                                        <li><a href="#">新着情報／活動報告</a></li>
                                        <li><a href="#">災害対策マニュアル</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h4 class="collapsedHeading" data-toggle="collapse" data-target="#sec4">会員のみなさまへ<i
                                            class="fas fa-minus float-right "></i></h4>

                                    <!-- <h4>会員のみなさまへ</h4> -->
                                    <ul id="sec4" class="collapse show">
                                        <li><a href="#" class="btn btn-square btn-warning btn-sm">会員ログイン <i
                                                    class="fa fa-chevron-right"></i></a></li>
                                        <li><a href="#">会員登録情報変更</a></li>
                                        <li><a href="#">会員専用ニュース</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="sub-menu">
                                        <li><a href="#"><i class="fa fa-chevron-right"></i> お問い合わせ </a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i> サイトマップ</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i> アクセス</a></li>
                                        <li style="margin-right: 0px"><a href="#"><i class="fa fa-chevron-right"></i> リンク</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <p class="copyright">(c)apan Association of Health industry Distributors ALL RIGHTS
                                        RESERVED</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <div class="sidebar">
            <button type="button" class="sidebar-close d-lg-none"><i class="fa fa-times"></i></button>
            <div class="side-title">会員のみなさま</div>
            <a href="#" class="btn btn-warning btn-square">会員ログイン <i class="fa fa-chevron-right"></i></a>
            <a href="#" class="btn-link">入会のご案内はこちらから</a>
            <div class="side-title-2">会員専用ページ</div>
            <ul class="sidebar-links">
                <li><a href="{{ route('frontend.user') }}"><i class="fa fa-pencil-alt"></i> 会員登録情報変更 <i class="fa fa-chevron-right"></i></a></li>
                <li><a href="{{ route('frontend.user.news') }}"><i class="fa fa-comment-alt"></i> 会員専用ニュース<i class="fa fa-chevron-right"></i></a></li>
                <li><a href="{{ route('frontend.user.news') }}"><i class="fa fa-exclamation"></i> 消費税関連<i class="fa fa-chevron-right"></i></a></li>
            </ul>
            <img src="{{ asset('/front-pages/images/sidebar-logo.PNG') }}" class="sidebar-logo" alt="" />
        </div>

        <div class="mini-sidebar">
            <div class="left-area"><div class="mini-title">会員のみなさま</div>
                <a href="#" class="mini-1st-button">入会のご案内はこちらから</a></div>
            <a href="#" class="mini-2nd-button">会員ログイン <i class="fa fa-chevron-right"></i></a>
        </div>


        <!--/ FOOTER END  -->
        <script src="{{ asset('/front-pages/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/front-pages/js/popper.min.js') }}"></script>
        <script src="{{ asset('/front-pages/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/front-pages/plugins/bootbox/bootbox.min.js') }}"></script>
        <script src="{{ asset('/front-pages/js/main.js') }}"></script>
        <script src="{{ asset("js/plugins/jquery-validation/jquery.validate.min.js")}}"></script>
        <script src="{{ asset("js/plugins/jquery-validation/additional-methods.js")}}"></script>
        <script>



(function (d) {
    var config = {
        kitId: 'xon7gha',
        scriptTimeout: 3000,
        async: true
    },
            h = d.documentElement,
            t = setTimeout(function () {
                h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
    h.className += " wf-loading";
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function () {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded")
            return;
        f = true;
        clearTimeout(t);
        try {
            Typekit.load(config)
        } catch (e) {
        }
    };
    s.parentNode.insertBefore(tk, s)
})(document);
        </script>

        @yield('js_after')
    </body>

</html>