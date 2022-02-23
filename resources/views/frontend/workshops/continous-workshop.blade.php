@extends('frontend.workshops-layout')
@section('jp_title') 研修・教育 @endsection
@section('title') Continuous training @endsection
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
                        <div class="level-2-menu {{ request()->is('continousWorkshop/outline',['type'=>request()->get('type')])? 'active':'' }}" >
                            <a href='{{ route('frontend.workshop.outline') }}'><h4 class="tabfont">研修の概要<span class="float-right"><i class="fa fa-chevron-right" style="color:#025E64" aria-hidden="true"></i></span></h4></a>
                        </div>
                    </div>
                    @if($continousWorkshop == 'online')
                    <div class="col-sm-4 pb-2 text">
                        <div class="level-2-menu {{ request()->is('continousWorkshop/application')? 'active':'' }}">
                            <a href='{{ route('frontend.workshop.application',['type'=>request()->get('type')]) }}'><h4 class="tabfont">開催一覧<span class="float-right"><i class="fa fa-chevron-right" style="color:#025E64"  aria-hidden="true"></i></span></h4></a>
                        </div>
                    </div>
                    @else
                    <div class="col-sm-4 pb-2 text">
                        <div class="level-2-menu {{ request()->is('continousWorkshop/faq',['type'=>request()->get('type')])? 'active':'' }}">
                            <a href='{{ route('frontend.workshop.faq') }}'><h4 class="tabfont">申込み・FAQ<span class="float-right"><i class="fa fa-chevron-right" style="color:#025E64"  aria-hidden="true"></i></span></h4></a>
                        </div>
                    </div>
                    @endif

                    <div class="col-sm-4 pb-2 text">
                        <div class="level-2-menu {{ request()->is('continousWorkshop/materials',['type'=>request()->get('type')])? 'active':'' }}">
                            <a href='{{ route('frontend.workshop.materials') }}'> <h4 class="tabfont">資料ダウンロード<span class="float-right"><i class="fa fa-chevron-right" style="color:#025E64" aria-hidden="true"></i></span></h4></a>
                        </div>
                    </div>

                    <div class="col-sm-4 pb-2 text">
                        <div class="level-2-menu {{ request()->is('continousWorkshop/mdic',['type'=>request()->get('type')])? 'active':'' }}">
                            <a href='{{ route('frontend.workshop.mdic') }}'>  <h4 class="tabfont">MDIC認定更新ポイント<span class="float-right"><i class="fa fa-chevron-right" style="color:#025E64" aria-hidden="true"></i></span></h4></a>
                        </div>
                    </div>

                    <div class="col-sm-4 pb-2  text">
                        <div class="level-2-menu {{ request()->is('continousWorkshop/certificatOfCompletion',['type'=>request()->get('type')])? 'active':'' }}">
                            <a href='{{ route('frontend.workshop.certificateOfCompletion') }}'>  <h4 class="tabfont">修了証の再発行<span class="float-right"><i class="fa fa-chevron-right" style="color:#025E64" aria-hidden="true"></i></span></h4></a>
                        </div>
                    </div>



                </div>


            </div>
        </div>
    </div>
</section>
@yield('page-body')
@endsection