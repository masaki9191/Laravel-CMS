@extends('frontend.workshops.other-workshop')
@section('page-body')
<section id="content" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <div class="row about-intro-new">

                    <div class="col-sm-12 pb-2  text">
                        <div class="p-3" style="background:#ECEFF4">
                            <h4 class="headingfontsize">過去の研修会一覧</h4>
                        </div>
                    </div>

                    <div class="col-sm-12 pb-2  text">
                        <div class="pr-3 pt-3 pb-3">
                            <p class="headingfontsize">こちらの研修は終了したリストです。</p>
                        </div>
                    </div>

                    <div class="col-sm-12 pb-2 text">
                        <div class="pr-0 pt-3 fivewrapper">

                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.other.workshop.events') }}'>全国</a></p></div>
                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.other.workshop.events',['from'=>1,'to'=>1]) }}'>北海道ブロック</a></p></div>
                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.other.workshop.events',['from'=>2,'to'=>7]) }}'>東北ブロック</a></p></div>
                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.other.workshop.events',['from'=>8,'to'=>14]) }}'>首都圏ブロック</a></p></div>
                            <div class="float-right hamzapage4_back"><p><a href='{{ route('frontend.other.workshop.events',['from'=>15,'to'=>20]) }}'>北陸ブロック</a></p></div>
                        </div>
                    </div>


                    <div class="col-sm-12 pb-2 text">
                        <div class="pr-0  pb-3 fivewrapper">

                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.other.workshop.events',['from'=>21,'to'=>24]) }}'>近畿ブロック</a></p></div>
                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.other.workshop.events',['from'=>25,'to'=>30]) }}'>北海道ブロック</a></p></div>
                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.other.workshop.events',['from'=>31,'to'=>35]) }}'>東北ブロック</a></p></div>
                            <div class="float-left hamzapage4_back"><p><a href='{{ route('frontend.other.workshop.events',['from'=>36,'to'=>39]) }}'>首都圏ブロック</a></p></div>
                            <div class="float-right hamzapage4_back"><p><a href='{{ route('frontend.other.workshop.events',['from'=>40,'to'=>47]) }}'>北陸ブロック</a></p></div>
                        </div>
                    </div>


                    <!--<div class="col-sm-12 pb-2 text">-->
                    <!--    <div class="pr-3 pt-3 pb-3">-->
                    <!--        <a class="mr-3" href="">青森県</a>-->
                    <!--        <a class="mr-3" href="">岩手県</a>-->
                    <!--        <a class="mr-3" href="">宮城県</a>-->
                    <!--        <a class="mr-3" href="">秋田県</a>-->
                    <!--        <a class="mr-3" href="">山形県</a>-->
                    <!--        <a class="mr-3" href="">福島県</a>-->
                    <!--    </div>-->
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
                                    <p><span class="float-right mt-3"><a href="{{ route('frontend.other.workshop.events.details',$workshop->id) }}" style="color:#1C689D">詳細・申込<i class="fa fa-chevron-right ml-2"></i></a></span></p>
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