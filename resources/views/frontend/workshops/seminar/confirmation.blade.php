@extends('frontend.workshops.seminar')
@section('page-body')
<section id="content" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <div class="row justify-content-center about-intro">
                    <div class="col-sm-12 pb-2 text">
                        <div class="p-3">
                            <p><b>申し込み完了</b></p>
                        </div>
                    </div>
                    <div class="col-sm-12 pb-5 text">
                        <div class="p-3 special_padding" style="background:#F2FAFD">
                            <p><b>スキルアップセミナー　テスト版</b></p>
                            <p><b>主催 </b> 日本医療機器販売業協会</p>
                            <p><b>共催 </b>　埼玉県医療機器販売業協会</p>
                        </div>
                    </div>

                    <div class="col-sm-12 pb-5 text">
                        <div class="p-3 special_padding" style="background:#D6F1F5">
                            <p><b>受講者氏名：</b> 坂口 広大 様</p>
                            <p><b>受付番号： </b> 2020-12-01-0001 で受け付けしました。</p>
                        </div>
                    </div>
                    <div class="col-sm-12 pb-5 text">
                        <p>請求書につきましては、申込内容を確認後「kenshu@jahid.gr.jp」より休日を除き5日以内に送付させていただきます。</p>
                        <p>万が一届かない場合は、メールアドレスに誤りがあるかもしれませんので、必ず、下記までFAXにてご連絡ください。</p>
                    </div>

                    <div class="col-sm-12 pb-5 text">
                        <p>FAX番号　03-5689-7919</p>
                        <p>メールアドレス　kenshu@jahid.gr.jp</p>
                    </div>

                    <a href="{{ route('frontend.home') }}" class="btn btn-below-2">トップページへ <span class='float-right'><i class="fa fa-chevron-right"></i></span> </a>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection