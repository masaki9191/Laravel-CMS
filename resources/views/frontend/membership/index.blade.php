@extends('layouts.frontend')
@section('content')
<div class="page-body bg-gray">
    <section id="page-header">
        <div class="mini_header_bar">
            <p class="float-right"> TOP ＞ <a href=''>会議一覧</a></p>
        </div>

        <div class="bg-header bg-what-is-jahid bg-meeting">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>会議一覧</h4>
                                <p class="mt-4">Meeting List</p>
                                <div class="divider mt-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section id="content" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row about-intro">
                        <div class="col-sm-12 pb-5">
                            <div class="p-3 heading" style="background:#ECEFF4">
                                <h4 class="headingfontsize special_padding">開催予定の会議一覧</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="left_side">
                               @foreach($conferences as $conference)
                                <div class="row below_button first_item">
                                    <div class="col-sm-12">
                                        <h3 class="tabdheadiingfont">{{ $conference->cms_conference_conf }}</h3>
                                    </div>
                                    <div class="col-sm-5">
                                        <p class="mem mem-item-1">日程</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="mem mem-item-2">{{ $conference->cms_conference_conf }}</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <p class="mem mem-item-3">場所</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="mem mem-item-4">{{ $conference->conf_date_time }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="section_2">
                                <div class="oper_part">
                                    <p class="main_head">会議一覧</p>
                                    <p>開催予定の会議一覧</p>
                                    <p>今年度全会議一覧</p>
                                </div>

                                <div class="lower_part">

                                    <p class="main_head">各会議等のページ</p>
                                    <p><a class="btn-primary" href="{{ route('cmsConference.index') }}">All</a></p>
                                    @foreach(App\Models\CmsConferenceType::all() as $type)
                                    <p><a class="btn-primary {{ request()->get('type')==$type->id ? 'active':'' }}" href="{{ route('frontend.membership',['type'=>$type->id]) }}">{{ $type->name }}</a></p>
                                    @endforeach
<!--                                    <p>理事会</p>
                                    <p>常任理事会</p>
                                    <p>総務部会</p>
                                    <p>総務・法制合同ＷＧ</p>
                                    <p>医療機器流通研究委員会</p>
                                    <p>法制部会</p>
                                    <p>情報部会</p>
                                    <p>広報部会</p>
                                    <p>研修部会</p>
                                    <p>研修部会ＷＧ</p>
                                    <p>研修部会　テキストＷＧ</p>
                                    <p>企業倫理委員会</p>
                                    <p>専門研究会</p>
                                    <p>循環器研究会</p>
                                    <p>公取協医器販協支部運営委員会</p>-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</div>

@endsection