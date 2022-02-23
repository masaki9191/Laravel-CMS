@extends('frontend.activity-layout')
@section('jp_title') 活動報告 @endsection
@section('title') Activity Report @endsection
@section('breadcurmb-section')
<p class="float-right"><a href=''>TOP ＞ 活動紹介 ＞ 災害対策マニュアル</a></p>
@endsection
@section('body-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pt-5 pb-5 text">
                <div class="p-3 heading" style="background:#ECEFF4">
                    <h4 class="headingfontsize special_padding">お知らせ</h4>
                </div>
            </div>
            <div class="pdf_files">
                @foreach($records as $record)
                <div class="col-sm-12">
                    <div class="border_bottom">
                        <div class="row pt-3">
                            <div class="col-sm-2 col-3">
                                <p class="date_color">{{ $record->jp_date }}</p>
                            </div>
                            <div class="col-sm-8 col-7">
                                <p class="news-desc"><b>{!! $record->title !!}</b></p>
                            </div>
                            <div class="col-sm-2 col-1">
                                <img src="{{ asset('/front-pages/images/9615304411581068451-128.png') }}" class="float-right" width="25px">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-2">
                <div class="col-md-10 offset-md-4">
                    {!! $records->render() !!}
                </div>
            </div>

            <!--            <nav>
                            <ul class="pagination">

                                <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                    <span class="page-link" aria-hidden="true">‹</span>
                                </li>





                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="http://test-jahid.com/jahid-git/public/about/directors-and-officers?page=2">2</a></li>
                                <li class="page-item"><a class="page-link" href="http://test-jahid.com/jahid-git/public/about/directors-and-officers?page=3">3</a></li>
                                <li class="page-item"><a class="page-link" href="http://test-jahid.com/jahid-git/public/about/directors-and-officers?page=4">4</a></li>


                                <li class="page-item">
                                    <a class="page-link" href="http://test-jahid.com/jahid-git/public/about/directors-and-officers?page=2" rel="next" aria-label="Next »">›</a>
                                </li>
                            </ul>
                        </nav>-->


        </div>
    </div>
</div>
@endsection