@extends('frontend.user-layout')
@section('jp_title') 会員登録情報変更 @endsection
@section('title')My Page @endsection
@section('body-content')

<div class="container">
    <div class="row">
        <div class="offset-md-1 col-md-10">
            <div class="row about-intro">
                <div class="col-sm-12 pb-5 text">
                    <div class="p-3 heading" style="background:#ECEFF4">
                        <h4 class="headingfontsize special_padding">送信完了</h4>
                    </div>
                </div>

                <div class="col-sm-12 pb-5 text">
                    <p>変更内容を送信いたしました。</p>
                </div>
            </div>
            <div class="col-sm-12 justify-content-center text-center pt-5 pb-3">
                <a href="{{ route('frontend.home') }}" class='btn btn-below-2'>トップページへ <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection