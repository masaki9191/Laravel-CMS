@extends('frontend.workshops.seminar')
@section('banner_section')
<div class="bg-header bg-outline-header">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <div class="card p-4">
                    <div class="card-body text-semibold-18">
                        <h5 class="card-title text-center">その他研修会</h5>
                        <p class="card-text"> 医薬品医療機器法において高度管理医療機器（特定保守管理医療機器を含む）販売業等の営業所管理並びに医療機器修理業の医療機器修理責任技術者に対して毎年度受講が義務付けられています。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-body')
<section id="content">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <div class="row about-intro-new">

                    <div class="col-sm-12 pb-2  text">
                        <div class="p-3"  style="background:#ECEFF4">
                            <h4 class="headingfontsize">開催一覧</h4>
                        </div>
                    </div>

                    <div class="col-sm-12 pb-2  text">
                        <div class="pr-3 pt-3 pb-3">
                            <p class="headingfontsize">今後開催予定のセミナー情報は、以下のメニューからご希望の開催地を選択してご覧ください。</p>
                        </div>
                    </div>

                    <div class="col-sm-12 pb-2 text">
                        <div class="pr-0 pt-3 fivewrapper">

                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.seminar.outline') }}'>全国</a></p></div>
                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.seminar.outline',['from'=>1,'to'=>1]) }}'>北海道ブロック</a></p></div>
                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.seminar.outline',['from'=>2,'to'=>7]) }}'>東北ブロック</a></p></div>
                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.seminar.outline',['from'=>8,'to'=>14]) }}'>首都圏ブロック</a></p></div>
                            <div class="float-right hamzapage4_back"><p><a href='{{ route('frontend.seminar.outline',['from'=>15,'to'=>20]) }}'>北陸ブロック</a></p></div>
                        </div>
                    </div>


                    <div class="col-sm-12 pb-2 text">
                        <div class="pr-0  pb-3 fivewrapper">

                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.seminar.outline',['from'=>21,'to'=>24]) }}'>近畿ブロック</a></p></div>
                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.seminar.outline',['from'=>25,'to'=>30]) }}'>北海道ブロック</a></p></div>
                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.seminar.outline',['from'=>31,'to'=>35]) }}'>東北ブロック</a></p></div>
                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.seminar.outline',['from'=>36,'to'=>39]) }}'>首都圏ブロック</a></p></div>
                            <div class="float-right hamzapage4_back"><p><a href='{{ route('frontend.seminar.outline',['from'=>40,'to'=>47]) }}'>北陸ブロック</a></p></div>
                        </div>
                    </div>



                    <div class="col-sm-12 pb-2 text borderbottom mt-5">
                        <div class="pr-3 pt-3 pb-3">
                            <h4 class="headingfontsize">北海道</h4>
                        </div>
                    </div>


                    <!--  <div class="col-sm-12 pb-2 text mt-3 position-relative" style="border:1px solid #CDD6DD">-->
                    <!--      <div class="pr-3 pt-3 pb-3">-->
                    <!--          <p><b>研修タイトル</b></p>-->

                    <!--<div class="col-sm-2 p-2 float-right rightbluediv">-->
                    <!--<span>Orange / Details</span><br>-->
                    <!--<span>Grey / Ended</span><br>-->
                    <!--<span>Blue / Coming soon</span>    -->
                    <!--</div>-->

                    <!--      </div>-->
                    <!--</div>-->

                    @foreach($records as $record)
                    <div class="col-sm-12 pb-2 text">
                        <div class="pr-3 pt-3 pb-3 border_bottom">
                            <h4 class="headingfontsize">{{$record->ken}}</h4>
                        </div>
                    </div>
                    @foreach($record->workshops as $workshop)
                    <div class="col-sm-12 pb-2 text mt-3">
                        <div class="p-3 borderdiv">
                            <div class="row col-sm-12 pr-0">
                                <div class="col-sm-8 p-0">
                                    <p><b>講師</b><span class="ml-2">{{ $workshop->no }}</span></p>
                                    <p><b>日程</b> <span class="ml-2">{{ $workshop->nittei2. '~'. $workshop->nittei3}}</span></p>
                                    <p><b>会場</b> <span class="ml-2">{{ $workshop->kyousai }}</span></p>
                                </div>
                                <div class="col-sm-4 p-0">
                                    <p></p>
                                    <p><span class="float-right mt-3"><a href="{{ route('frontend.seminar.outline.details',$workshop->id) }}" style="color:#1C689D">詳細・申込<i class="fa fa-chevron-right ml-2"></i></a></span></p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection