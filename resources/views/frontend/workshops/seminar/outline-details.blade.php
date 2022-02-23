@extends('frontend.workshops.seminar')
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
                    <div class="col-sm-12 pb-2 text">
                        <button class="btn btn-below" data-toggle="modal" data-target="#exampleModal">お申し込み <span class='float-right'><i class="fa fa-chevron-right"></i></span> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="margin-top:20%">
            <div class="modal-header mt-5">
                <h5 class="modal-title" id="exampleModalLabel">その他研修会参加お申し込み</h5>
                <button type="button" class="close" id="modalcrossbtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-2">
                            <div class="row">

                                <div class="col-sm-12 pb-2  text">
                                    <div class="p-4"  style="background:#F2FAFD">
                                        <h4 style="font-size:15px;"><b>スキルアップセミナー　テスト版</b></h4>
                                        <h4 style="font-size:12px;"><b>主催　日本医療機器販売業協会</b></h4>
                                        <h4 style="font-size:12px;"><b>共催　埼玉県医療機器販売業協会</b></h4>
                                    </div>
                                </div>

                                <div class="col-sm-12 pb-2 mt-3 text">
                                    <div class="p-3"  style="background:#ECEFF4">
                                        <h4 class="headingfontsize">お申し込みの前に</h4>
                                    </div>
                                </div>

                                <div class="col-sm-12 pb-2 mt-3 text">
                                    <div class="p-3">
                                        <p class="modalpara">本セミナーにご参加をご希望の方は、必ず事務局からのお知らせをご確認のうえ、お申し込みください</p>
                                    </div>
                                </div>

                                <div class="col-sm-12 pb-2 text borderbottom">
                                    <div class="pr-3 pt-3 pb-3">
                                        <h4 class="headingfontsize">北海道</h4>
                                    </div>
                                </div>

                                <div class="col-sm-12 pb-2 mt-3 text">
                                    <div class="p-3">
                                        <p><b>1. 個人情報の収集</b></p>
                                        <p class="modalpara">個人情報の収集にあたり情報主体の権利を尊重し、収集の目的を明示し、本人の同意を得た上で、その範囲内で情報を適切に取り扱います。収集の方法については、気密性保持を充分に講じた当社サイト内のフォームにご入力いただくほか、必要事項を郵送またはファクシミリ、あるいはお電話やE-mailなどで収集する場合もあります。</p>
                                    </div>
                                </div>

                                <div class="col-sm-12 pb-2 mt-3 text">
                                    <div class="p-3">
                                        <p><b>2. 個人情報の利用</b></p>
                                        <p class="modalpara">当社は、当社サイトのサイト利用規約および登録ユーザー規約についてお客様からの承諾を予めいただき、登録ユーザー規約に掲げる利用目的のためにのみ、お客様の個人情報を利用いたします。また、万が一利用規約に掲げる利用目的の範囲を超えて利用する必要性が生じた場合には、その旨を事前にお客様に通知し、承諾をいただいた場合のみ、個人情報を利用いたします。</p>
                                    </div>
                                </div>

                                <div class="col-sm-12 pb-2 mt-3 text">
                                    <div class="p-3">
                                        <p><b>3. 個人情報の提供</b></p>
                                        <p class="modalpara">法令で許された場合（個人情報の保護に関する法律第23条1項各号・同23条2項・同23条4項）または情報主体の事前の同意を得た場合を除いては、第三者に提供しないものとします。また、お客様の個人情報をサービス提供のために必要である業務委託先に提供する場合は、情報の漏洩や不正使用などがないよう、予め機密保持契約を締結した業務委託先にのおみ行い、当該委託先に対する必要かつ適切な監督を行ないます。</p>
                                    </div>
                                </div>

                                <div class="col-sm-12 pb-2 mt-3 text">
                                    <div class="p-3">
                                        <p><b>4. 個人情報の開示請求</b></p>
                                        <p class="modalpara">個人情報の開示、訂正、削除は、情報主体の意思により随時変更することが可能です。当社は、お客様からご自身の個人情報の利用目的の通知を求められた場合、あるいは、ご自身の個人情報データの開示が求められた場合、ご本人からのお申し出であることを確認させていただいた上で、個人情報保護法に基づき速やかに通知または開示いたします。</p>
                                    </div>
                                </div>

                                <div class="col-sm-12 pb-2 mt-3 text">
                                    <div class="p-3">
                                        <p><b>5. 個人情報の管理</b></p>
                                        <p class="modalpara">収集した個人情報は厳重な管理体制のもとに保管し、不正なアクセス、紛失、破壊、改ざんおよび漏洩などの防止のために情報セキュリティ体制を徹底します。</p>
                                    </div>
                                </div>

                                <div class="col-sm-12 pb-2 mt-3 text">
                                    <div class="p-3">
                                        <p><b>6. 法令・規範の遵守</b></p>
                                        <p class="modalpara">個人情報の取り扱いにおいて当該個人情報の保護に適用される法令及びその他の規範を遵守します。</p>
                                        <p class="modalpara">一般社団法人 日本医療機器販売業協会は、本ポリシーを会員はもとより業務に係る者一人ひとりがその主旨と意図を十分に理解した上で、日常の業務遂行にあたって細心の注意を払っております。</p>
                                    </div>
                                </div>

                                <div class="col-sm-12 pb-2 mt-3 text">
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input term-check" type="checkbox"> 事務局からのお知らせを確認しました。
                                        </label>
                                    </div>

                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input term-check" type="checkbox"> 個人情報保護の取り扱いについて同意します。
                                        </label>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer mb-5" style="justify-content: center;">

                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">規約に同意しない</button>-->

                <button type="button" class='btn btn-secondary modalbtnfooter'  data-dismiss="modal"><span class="float-left"> <i class="fa fa-chevron-left"></i></span> トップページへ</button>
                <button type="button" class='btn btn-secondary modalbtnfooter confrm-disable'><span class="float-left"> <i class="fa fa-chevron-right"></i></span> トップページへ</button>
                <a href="{{ route('frontend.workshop.create',['kensyu_id'=>$record->id]) }}" class='btn btn-below-2 modalbtnfooter yellowbtn'> トップページへ <span span class="float-right"><i class="fa fa-chevron-right"></i></span></a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js_after')
<script>
    $(function () {
        $('.modal').on('change', '.term-check', function () {
            if ($('.term-check:checked').length == 2) {
                $('.confrm-disable').hide();
                $('.confrm-enable').show();
            } else {
                $('.confrm-disable').show();
                $('.confrm-enable').hide();
            }
        });
    });
</script>
@endsection