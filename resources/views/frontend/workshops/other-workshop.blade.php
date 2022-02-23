@extends('frontend.workshops-layout')
@section('jp_title') その他研修会 @endsection
@section('title') Other workshops @endsection
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
                        <div class="p-2 {{ request()->is('othersWorkshop/outline') || request()->is('othersWorkshop/outline/*')? 'active':'' }}">
                            <a href="{{ route('frontend.other.workshop.outline') }}"><h4 class="tabfont">開催一覧<span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></h4></a>
                        </div>
                    </div>

                    <div class="col-sm-4 pb-2 text">
                        <div class="p-2 {{  request()->is('othersWorkshop/events') || request()->is('othersWorkshop/events/*')? 'active':'' }}">
                            <a href="{{ route('frontend.other.workshop.events') }}"><h4 class="tabfont">資料ダウンロード<span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></h4></a>
                        </div>
                    </div>

                    <div class="col-sm-4 pb-2 text">
                        <div class="p-2 {{ request()->is('othersWorkshop/mdic')? 'active':'' }}">
                            <a href="{{ route('frontend.other.workshop.mdic') }}"><h4 class="tabfont">MDIC認定更新ポイント<span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></h4></a>
                        </div>
                    </div>

                    <div class="col-sm-4 pb-2  text">
                        <div class="p-2 {{ request()->is('othersWorkshop/certificatOfCompletion')? 'active':'' }}">
                            <a href="{{ route('frontend.other.workshop.certificateOfCompletion') }}"> <h4 class="tabfont">修了証の再発行<span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@yield('page-body')
@endsection