@extends('frontend.workshops.other-workshop')
@section('page-body')
<section id="content" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <div class="row about-intro">
                    <div class="col-sm-12 pb-5 text">
                        <div class="p-3 heading" style="background:#ECEFF4">
                            <h4 class="headingfontsize special_padding">研修タイトル</h4>
                        </div>
                    </div>
                    <div class="col-sm-12 pb-5 text">
                        <div class="p-3 special_padding" style="background:#F2FAFD">
                            <p><b>主催</b> <span>日本医療機器販売業協会</span></p>
                            <p><b>共催</b> <span>埼玉県医療機器販売業協会</span></p>
                            <p><b>後援</b> <span>〇〇〇〇〇〇〇〇〇〇〇</span></p>
                        </div>
                    </div>
                    <div class="col-sm-8 pb-5 text overflow">
                        <div class="row">
                            <div class="col-sm-4 table_div_1">
                                <p><b>会場</b></p>
                            </div>

                            <div class="col-sm-8 table_div_2">
                                <p>東京　{{ $record->kyousai }}</p>
                                <p>住所：{{ $record->no }}</p>
                                <p>TEL：{{ $record->kaizyou4 }}</p>
                            </div>

                            <div class="col-sm-4 table_div_1">
                                <p><b>受講申込受付期間</b></p>
                            </div>

                            <div class="col-sm-8 table_div_2">
                                <p>{{ $record->nittei2. '~'. $record->nittei3}}</p>
                            </div>

                            <div class="col-sm-4 table_div_1">
                                <p><b>受講料</b></p>
                            </div>

                            <div class="col-sm-8 table_div_2">
                                <p>0,000円</p>
                            </div>

                            <div class="col-sm-4 table_div_1">
                                <p><b>講師</b></p>
                            </div>

                            <div class="col-sm-8 table_div_2">
                                <p>〇〇〇〇〇〇〇〇〇〇〇〇</p>
                                <p>〇〇〇〇〇〇〇〇〇〇〇〇</p>
                                <p>〇〇〇〇〇〇〇〇〇〇〇〇</p>
                            </div>

                            <div class="col-sm-4 table_div_1">
                                <p><b>お問合せ先</b></p>
                            </div>

                            <div class="col-sm-8 table_div_2">
                                <p>{{ $record->kfax }}</p>
                            </div>

                            <div class="col-sm-4 table_div_1">
                                <p><b>備考</b></p>
                            </div>

                            <div class="col-sm-8 table_div_2">
                                <p>例：お申込みの前に以下PDFを必ずご確認下さい。</p>
                                <p><img src="{{asset('/front-pages/images/9615304411581068451-128.png')}}" class="mr-2" width="30px">事務局からのお知らせ</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 pb-2 text" style="padding: 0px 12px;">
                        <div class="calculation" >
                            <div class="calculation_within">
                                <p class="text-center">00月00日（月）</p>
                                <p class="text-center">00:00-00:00</p>
                                <p class="text-center">（受付開始時間 13時）</p>
                            </div>
                            <p class="ml-4"><span class="mr-2">定員 </span> <span  class="mr-2" style='color:#1C689D'>00</span> <span>名</span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection