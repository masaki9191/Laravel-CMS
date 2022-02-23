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
    <section id="content" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div class="row about-intro">
                        <div class="col-sm-12 pb-5 text">
                            <div class="">
                                <h4 class="headingfontsize special_padding" style='font-weight: 400;'>送信完了</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="offset-md-1 col-md-10">
                    <div class="col-sm-12">
                        <p><b>お問い合わせいただき、誠にありがとうございます。</b></p>
                        <p><b>ご入力いただいたメールアドレスに、受付確認メールを送信いたしました。</b></p>
                        <p><b>返答まで、今しばらくお待ちくださいませ。</b></p>
                    </div>
                </div>


                <div class="col-sm-12 justify-content-center text-center pt-5 pb-3">
                    <a href="{{ route('frontend.home') }}" class='btn btn-below-2'>トップページへ <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
    </section>

</div>

@endsection