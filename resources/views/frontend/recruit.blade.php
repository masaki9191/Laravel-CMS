    @extends('frontend.what-is-jahid-layout')
    @section('jp_title') 就活生のみなさま @endsection
    @section('title') Recruit @endsection
    @section('body-content')
    <div class="bg-recruit">
        <div class="container" style="max-width: 1000px;">
            <div class="row">
                <div class="col-md-6">

                                <div class="align-top float-left recruit-menu-main">
                                    <h3>Recruit Menu</h3>  
                                        <p>職種紹介（一日の業務））<i class="fa fa-angle-down"></i></</p>
                                        <p>VOICE<i class="fa fa-angle-down"></i></p>
                                        <p>Q%A<i class="fa fa-angle-down"></i></p>
                                </div>
                </div>
				<div class="col-md-6 recruit-image">
				<img src="/front-pages/images/header-recruit.png">
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="note mt-8">職種紹介（1日の業務）</div>
                <p class="full-width text-bold-20 text-center mt-4">職種ごとの1日の業務を見る</p>
                <div class="row recruit-links mt-3">
                    <div class="col-12 col-sm-4">
                        <a href="#recruit-1" class="btn btn-secondary btn-square"><span>01</span>営業職（入社1年目）<i
                                class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="col-12 col-sm-4">
                        <a href="#recruit-2" class="btn btn-secondary btn-square"><span>02</span>営業職（入社5年目）<i
                                class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="col-12 col-sm-4">
                        <a href="#recruit-3" class="btn btn-secondary btn-square"><span>03</span>技術職（入社3年目）<i
                                class="fa fa-chevron-down"></i></a>
                    </div>
                </div>
                <div id="timeline" class="mt-5">
                    <div id="recruit-1" class="color1">
                        <div class="heading">
                            <div class="color-1">01</div>
                            <p>営業職（入社1年目）</p>
                        </div>
                        <div class="float-image">
                            <div class="image">
                                <img src="{{ asset('/front-pages/images/recruit/recruit-1.png') }}" alt="" />
                            </div>
                            <div class="bg-gray">
                                <p>新入社員研修も終わり、現在OJT研修として先輩社員と一緒に300～400床規模の病院を２件担当しています。</p>
                                <p class="mt-4">各病院それぞれ主体となる診療科が異なるので、特性に応じた医療消耗品や、医療機器を提案して販売しています。</p>
                                <p class="float-bottom">この他に、研究会や学会等の運営のお手伝いも行っています。</p>
                            </div>
                        </div>
                        <h4><span class="color-1">—</span>ある1日のスケジュール</h4>

                        <div class="timeline">
                            <div class="row timeline-movement">
                                <div class="timeline-badge">
                                    <div></div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel left">
                                                <img src="{{ asset('/front-pages/images/recruit/img-1.png') }}" alt=""
                                                    class="full-width" />
                                                <p class="text-bold-16 mt-2">納品する商品の確認</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-offset-1 col-sm-11">
                                            <div class="timeline-panel right">
                                                <h5>午前</h5>
                                                <div>
                                                    <div class="title">出社</div>
                                                    <div class="desc">
                                                        会社に到着したらメールを確認して、前日までの進捗状況と当日のスケジュールを確認して上司に報告し、業務方針を固めてから一日の準備を行います。
                                                    </div>
                                                    <div class="title mt-4">病院に出発</div>
                                                    <div class="desc">会社での準備が終わったら、納品物を車に積込んで先輩社員と一緒に担当する病院に出発します。</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline-movement">
                                <div class="timeline-badge">
                                    <div></div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel left">
                                                <img src="{{ asset('/front-pages/images/recruit/img-2.png') }}" alt=""
                                                    class="full-width" />
                                                <p class="text-bold-16 mt-2">医療従事者との打合せ</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-offset-1 col-sm-11">
                                            <div class="timeline-panel right">
                                                <h5>日中</h5>
                                                <div>
                                                    <div class="title">納品・器械の準備等</div>
                                                    <div class="desc">
                                                        <ul>
                                                            <li>病院へ納品、先輩社員の指導のもと手術などで使用する医療機器の確認、物品の手配、管理など行います。</li>
                                                            <li>病院に過不足がないように定期的に棚卸もしています。</li>
                                                        </ul>
                                                    </div>
                                                    <div class="title mt-4">昼食</div>
                                                    <div class="desc">なるべく毎日同じ時間帯に食べられるように調整しています。</div>

                                                    <div class="title mt-4">営業活動</div>
                                                    <div class="desc">医師、看護師など医療従事者が望む情報や商品を調べ紹介しています。</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline-movement">
                                <div class="timeline-badge">
                                    <div></div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel left">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-offset-1 col-sm-11">
                                            <div class="timeline-panel right">
                                                <h5>夕方</h5>
                                                <div>
                                                    <div class="title">帰社</div>
                                                    <div class="desc">病院で必要な仕事を済ませ、会社に戻り見積作成やデモ器の手配、明日の準備などを行います。</div>
                                                    <div class="title mt-4">退社</div>
                                                    <div class="desc">退社前にその日の営業日報等を記入し、やるべき事を終えてから退社するよう心がけています。</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="recruit-2" class="color2">
                        <div class="heading">
                            <div>02</div>
                            <p>営業職（入社5年目）</p>
                        </div>
                        <div class="float-image">
                            <div class="image">
                                <img src="{{ asset('/front-pages/images/recruit/recruit-2.png') }}" alt="" />
                            </div>
                            <div class="bg-gray">
                                <p>総合営業として、医師・看護師等と打ち合わせを行い医療機器の提案・紹介等を行います。</p>
                                <p class="mt-4">病院の全部署を把握し、医療機器の修理依頼や設備などのお話もさせていただいております。</p>
                                <p class="mt-4">チームに配属された後輩社員のサポートや教育など幅広い仕事を任されています。</p>
                            </div>
                        </div>
                        <h4><span>—</span>ある1日のスケジュール</h4>

                        <div class="timeline">
                            <div class="row timeline-movement">
                                <div class="timeline-badge">
                                    <div></div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel left">
                                                <img src="{{ asset('/front-pages/images/recruit/img-3.png') }}" alt=""
                                                    class="full-width" />
                                                <p class="text-bold-16 mt-2">後輩社員との打ち合わせ</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-offset-1 col-sm-11">
                                            <div class="timeline-panel right">
                                                <h5>午前</h5>
                                                <div>
                                                    <div class="title">出社</div>
                                                    <div class="desc">
                                                        <ul>
                                                            <li>朝礼までの時間を利用して、病院に提案する資料作成や最新の情報収集を行います。仕事に応じて、自宅から病院へ直行することもあります。
                                                            </li>
                                                            <li>社内で簡単な打ち合わせを行い、行動予定のすり合わせや報告を行います。</li>
                                                            <li>後輩社員の一日の予定を確認して営業の計画や、病院からの依頼などに応じて様々な指示を出します。</li>
                                                        </ul>
                                                    </div>
                                                    <div class="title mt-4">打ち合わせ</div>
                                                    <div class="desc">
                                                        医療機器メーカーの営業担当者が来社し、新しい情報の確認や一緒に病院へ提案する内容について打ち合わせを行います。</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline-movement">
                                <div class="timeline-badge">
                                    <div></div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel left">
                                                <img src="{{ asset('/front-pages/images/recruit/img-4.png') }}" alt=""
                                                    class="full-width" />
                                                <p class="text-bold-16 mt-2">医療従事者の皆様と打合せ</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-offset-1 col-sm-11">
                                            <div class="timeline-panel right">
                                                <h5>日中</h5>
                                                <div>
                                                    <div class="title">病院へ営業</div>
                                                    <div class="desc">後輩社員と手術に使用する医療機器や材料に漏れが無いか確認して、病院に向かいます。</div>
                                                    <div class="title mt-4">営業活動</div>
                                                    <div class="desc">
                                                        <ul>
                                                            <li>病院スタッフに会える時間を考慮して、打ち合わせ。</li>
                                                            <li>時には医療機器メーカーと一緒に訪問し、新商品の紹介や最新情報をお伝えします。</li>
                                                            <li>また医療機器の不具合等が発生し、部品交換が必要な場合は社内の専任の修理担当者に連絡をとり、診療に支障が出ないよう早急に対応します。
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="title mt-4">昼食</div>
                                                    <div class="desc">仕事の内容によっては、昼食が14時近くになることも。</div>
                                                    <div class="title mt-4">営業活動</div>
                                                    <div class="desc">
                                                        <ul>
                                                            <li>医師・看護師をはじめとした医療従事者の皆様と打ち合わせ。</li>
                                                            <li>手術や外来が終わる時間帯を考慮<br>
                                                                し、先生方と打ち合わせをさせて<br>
                                                                頂きます。日々の納品作業や営業<br>
                                                                活動の中で、医療従事者の皆様と<br>
                                                                の会話を通して、現在使用してい<br>
                                                                る商品にどのような要望や不満を<br>
                                                                お持ちかを掴み、新たな提案に繋<br>
                                                                げるため同じチームの上司、同<br>
                                                                僚、時には医療機器メーカ<br>
                                                                ーの方達と検討します。</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="hide">
                                                    <div class="title">病院へ営業</div>
                                                    <div class="desc">
                                                        後輩社員と手術に使用する医療機器や材料に漏れが無いか確認して、病院に向かいます。
                                                    </div>
                                                    <div class="title mt-4">営業活動</div>
                                                    <div class="desc">
                                                        <ul>
                                                            <li>病院スタッフに会える時間を考慮して、打ち合わせ。</li>
                                                            <li>時には医療機器メーカーと一緒に訪問し、新商品の紹介や最新情報をお伝えします。</li>
                                                            <li>また医療機器の不具合等が発生し、部品交換が必要な場合は社内の専任の修理担当者に連絡をとり、診療に支障が出ないよう早急に対応します。
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="title mt-4">昼食</div>
                                                    <div class="desc">仕事の内容によっては、昼食が14時近くになることも。</div>

                                                    <div class="title mt-4">営業活動</div>
                                                    <div class="desc">
                                                        <ul>
                                                            <li>医師・看護師をはじめとした医療従事者の皆様と打ち合わせ。</li>
                                                            <li>手術や外来が終わる時間帯を考慮し、先生方と打ち合わせをさせて頂きます。日々の納品作業や営業活動の中で、医療従事者の皆様との会話を通して、現在使用している商品にどのような要望や不満をお持ちかを掴み、新たな提案に繋げるため同じチームの上司、同僚、時には医療機器メーカーの方達と検討します。
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline-movement">
                                <div class="timeline-badge">
                                    <div></div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel left">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-offset-1 col-sm-11">
                                            <div class="timeline-panel right">
                                                <h5>夕方</h5>
                                                <div>
                                                    <div class="title">病院での勉強会</div>
                                                    <div class="desc">時には医療機器メーカーと共に、医療従事者の方々への勉強会などを開催しています。</div>
                                                    <div class="title mt-4">帰社</div>
                                                    <div class="desc">
                                                        病院で注文伝票の確認等を済ませたら、会社に戻ります。至急必要な医療機器もあり、その際は素早い対応が求められます。</div>
                                                    <div class="title mt-4">退社</div>
                                                    <div class="desc">伝票の整理、勉強会で使用する各種資料の作成を行って退社します。</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="recruit-3" class="color3">
                        <div class="heading">
                            <div>03</div>
                            <p>技術職（入社3年目）</p>
                        </div>
                        <div class="float-image">
                            <div class="image">
                                <img src="{{ asset('/front-pages/images/recruit/recruit-2.png') }}" alt="" />
                            </div>
                            <div class="bg-gray">
                                <p>医療機器修理業の責任技術者として、修理や保守点検等のメンテナンス業務、消耗部品の交換などを行っています。</p>
                                <p class="mt-4">また、修理状況などを病院や医療機器メーカーに報告書として提出し説明などもしています。</p>
                                <p class="mt-4">時には大型医療機器の設置のサポートを行ったり、医療機器メーカーへ出向き修理やメンテナンスの研修を受けることもあります。</p>
                            </div>
                        </div>
                        <h4><span>—</span>ある1日のスケジュール</h4>

                        <div class="timeline">
                            <div class="row timeline-movement">
                                <div class="timeline-badge">
                                    <div></div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel left">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-offset-1 col-sm-11">
                                            <div class="timeline-panel right">
                                                <h5>午前</h5>
                                                <div>
                                                    <div class="title">出社</div>
                                                    <div class="desc">
                                                        朝礼で今日の予定や連絡事項を上司に報告します。仕事に応じて、自宅から病院へ直行となる場合もあります。
                                                    </div>
                                                    <div class="title mt-4">医療機器メーカーとの打ち合わせ</div>
                                                    <div class="desc">事前に医療機器メーカーのメンテナンス部に連絡を取り、機器の不具合情報の共有などを行います。
                                                    </div>
                                                    <div class="title mt-4">器械の準備・打ち合わせ等</div>
                                                    <div class="desc">今日訪問する病院の修理に関する資料や部品、また工具などの準備を行います。<br>
                                                        上司、部下の予定も確認して他施設の修理情報などの共有を行います。訪問場所や時間など営業部と協力して調整を行います。
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline-movement">
                                <div class="timeline-badge">
                                    <div></div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel left">
                                                <img src="{{ asset('/front-pages/images/recruit/img-5.png') }}" alt=""
                                                    class="full-width" />
                                                <p class="text-bold-16 mt-2">修理作業</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-offset-1 col-sm-11">
                                            <div class="timeline-panel right">
                                                <h5>日中</h5>
                                                <div>
                                                    <div class="title">病院へ移動</div>
                                                    <div class="desc">
                                                        営業部と調整を終えたら現場に向かいます。時には上司や医療機器メーカーも同行します。
                                                    </div>
                                                    <div class="title">病院での業務</div>
                                                    <div class="desc">
                                                        挨拶の後、病院スタッフから不具合の状況などをお聞きして、修理やメンテナンス作業に入ります。
                                                    </div>
                                                    <div class="title mt-4">作業内容の報告（その後の対応）</div>
                                                    <div class="desc">作業終了後、病院スタッフに作業内容などを報告し、その後の対応を行います。
                                                        <ul>
                                                            <li>修理完成であれば報告書を提出し、病院スタッフから検収を頂き修理完成となります。</li>
                                                            <li>修理が未完成であれば状況をお伝えし、後日部品など準備して引き続き対応します。また、その時の状況なども病院スタッフに詳しく説明します。<br>
                                                                必要に応じて代替え器などを準備し、診療に支障が出ないように対応します。
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="title mt-4">昼食</div>
                                                    <div class="title mt-4">他の病院へ移動</div>
                                                    <div class="desc">
                                                        朝の打ち合わせで確認している他の病院へ移動して、同じく機器の修理、メンテナンス作業を行います。他の技術者と協力して作業を行うこともあります。
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline-movement">
                                <div class="timeline-badge">
                                    <div></div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel left">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-offset-1 col-sm-11">
                                            <div class="timeline-panel right">
                                                <h5>夕方</h5>
                                                <div>
                                                    <div class="title">病院での勉強会</div>
                                                    <div class="desc">時には医療機器メーカーと共に、医療従事者の方々への勉強会などを開催しています。</div>
                                                    <div class="title mt-4">帰社</div>
                                                    <div class="desc">
                                                        病院で注文伝票の確認等を済ませたら、会社に戻ります。至急必要な医療機器もあり、その際は素早い対応が求められます。</div>
                                                    <div class="title mt-4">退社</div>
                                                    <div class="desc">伝票の整理、勉強会で使用する各種資料の作成を行って退社します。</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="note mt-4">お仕事紹介動画</div>
                <video class="jahid_video mt-4" controls
                    poster="{{ asset('/front-pages/images/recruit/bg-video-1.png') }}">
                    <source src="movie.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <div class="note mt-7">VOICE</div>
                <div class="voice color1">
                    <div class="heading-1 mt-7">01</div>
                    <div class="heading-2">医療の発展に貢献、求められる若い力</div>
                    <div class="heading-3">心臓血管外科の第一人者がメッセージ</div>
                    <p class="text-18">
                        医は仁術なり、一昔前はそのように言われていました。医療といっても幅広く、検査、治療、看護、介護、製造、販売、流通、サービスなど、多岐の分野に分かれています。現在はそれらが一体となって仁術を紡ぎだしています。私は院長として病院経営に携わりながら、外科医として手術も執刀します。日々の仕事は一人で完結するものではありません。院内スタッフの他にも、医療製品の開発、製造に関わる人、それを販売する人など、沢山の人々の尽力で医師の仕事が全うできていると考えています。
                    </p>
                    <p class="text-18">
                        私が日々行っているのは心臓の手術です。生命に直結する現場では、迅速性と正確性が求められます。医療機器は数十万品目もあり、ひとつの手術を1メーカーの製品で完結することはできません。数あるメーカー、多品種の中から最適な製品を選択し、適切な納品や在庫管理などの役割を担ってくれているのが、日々病院に来ている医療機器販売会社の人々です。製品の操作方法など、現場にとって有益な情報も提供してくれています。入社間もなく何も知らなかった社員が成長していく姿を見ていると、人の成長には限りがないと感じます。
                    </p>
                    <p class="text-18">
                        私も医師になりたての頃には試行錯誤を繰り返しましたが、継続は力なりを胸に努力を積み重ねてきました。皆さんは希望に溢れながらも手探りで就職活動をされていると思います。医療業界は高齢化で今後も需要が伸びていく分野です。患者さんの快復に無上の喜びを感じながら、日々努力を重ねていけば必ず花開く業界だと思います。若い力が業界には必要です。私たちと一緒に日本の医療の発展に貢献しませんか。
                    </p>

                    <div class="infobox d-flex">
                        <img src="{{ asset('/front-pages/images/recruit/img-6.png') }}" alt="" />
                        <div class="bg-gray">
                            <p class="text-bold-16 mb-2">
                                順天堂大学医学部附属 順天堂医院 前院長
                            </p>
                            <p class="text-bold-20">天野 篤 先生</p>
                            <p class="text-18">
                                新東京病院心臓血管外科部長、昭和大学横浜市北部病院循環器センター長・教授などを経て、2002年より現職。心臓血管外科の第一人者。2012年2月には東京大学と順天堂大学の合同チームで天皇陛下の冠動脈バイパス手術に臨み、執刀医を務める。手術後の「普段通りの手術を普段通りにしたということ」などのコメントに、非凡な平常心とそれを裏付ける圧倒的な経験、そしてそこに慢心しないあくなき向上心が垣間見え、日本中の関心を集めた。その実直な人柄を、多くの患者が慕い信頼を寄せている。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="voice color2">
                    <div class="heading-1 mt-7">02</div>
                    <div class="heading-2">患者さんのためにという熱い気持ち、<br>頼れる存在</div>
                    <div class="heading-3">地域に密着した医療活動をめざす医師に聞く</div>
                    <p class="text-bold-16 color-3">先生が医療機器販売という仕事を知ったときどう思いましたか。</p>
                    <p>常に私達医療従事者に寄り添い、日々の会話から何を求められているのかくみ取る力、そして実行する事、患者さん毎に症例、症状が違いますが、最適な商品、新しい商品を使える様に準備する行動力には驚きました。人の命を預かる厳しい現場において、医療従事者と供に患者さんのためにという熱い気持ちで、しっかりと自分の役割を理解し仕事に向き合っている販売業者は、とても頼りになる存在です。
                    </p>
                    <p class="text-bold-16 color-3">先生が困った時、医療機器販売業者がサポートした事例はありますか。</p>
                    <p class="text-18">
                        緊急手術が入り、３時間後にはオペをしなければならないといった時に、必要な医療器材を急遽、販売業者に全て揃えてもらい完璧な体制で手術に臨むことができた時は本当に印象的でした。他に私のオーダーの内容から不足の商品を事前に連絡頂き、実際の症例で必要だった事など多くの事象があります。
                    </p>

                    <p class="text-bold-16 color-3">
                        必要な情報がネットで得られる時代となり、医薬品業界ではMR（医薬情報担当者）の削減といったことも話題に上がっています。このような中、先生にとって、MRや医薬品卸売業者にはない、医療機器販売業者ならではの価値とは何でしょうか。
                    </p>
                    <p class="text-18">
                        医薬品に関する様々な情報は、文字で内容が伝わるケースが多く、ネットから得られる情報も大量にあります。更に、医薬品は薬剤部が一元的に管理してくれているので医師が関与する部分は少ない状況にあります。
                    </p>
                    <p class="text-18">
                        一方、医療機器については、その使用感、使い勝手、洗浄・保守に関する情報等、医師や看護師に必要な情報は多岐にわたり、ネットでは知りえないことが多くあります。また、手術時の器械や材料の手配についても、医療機器販売業者のフォローなしでは成し得ないのも事実です。医療機器販売業者がいてくれるから、医師は安心して患者さんに向き合えるのだと思います。
                    </p>

                    <p class="text-bold-16 color-3">就職活動中の学生の皆さんへメッセージをお願いします。</p>
                    <p class="text-18">
                        当院もそうですが、地域住民の生活に密着した医療機関としていかに地域に貢献できるかが重要です。医療機器販売の仕事においても同じで、医療機器販業者の方々が私共と地域医療を支えて貰っている事も事実です。
                    </p>
                    <p class="text-18">
                        無論各社の社員教育が基本と考えていますが、私自身、医療機器販売業の新人の方が解らない事があれば時間のゆるす限り、教えて行きたいと思っています。私達医療従事者と一丸となって日本の医療体制を支えていきましょう。
                    </p>

                    <div class="infobox d-flex">
                        <img src="{{ asset('/front-pages/images/recruit/img-7.png') }}" alt="" class="full-width" />
                        <div class="bg-gray">
                            <p class="text-bold-16">
                                医療法人社団仁成会 高木病院
                            </p>
                            <p class="text-bold-20">今村 仁 先生</p>
                            <p class="text-18">2005年、福島県立医科大学
                                医学部卒、医学博士。日本整形外科学会専門医、日本リウマチ学会指導医、日本整形外科学会認定スポーツ医、日本体育協会公認スポーツドクター、義肢装具等適合判定医師（厚生労働省）として医療現場に携わる。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="voice color3">
                    <div class="heading-1 mt-7">03</div>
                    <div class="heading-2">現場とメーカーつなぐ地域密着医療の要 </div>

                    <p class="text-18 mt-4">
                        日本は今、未曾有(みぞう)の勢いで高齢化が進んでいます。それに伴って、病気の診断や治療、リハビリのための医療機器へのニーズが高まっています。また、近年は大規模な自然災害が続発し、被災した患者さんへの迅速な治療のため医療機器の存在は一段と重要性を増しています。
                    </p>
                    <p class="text-18">しかし、そうした医療機器も、それを必要とする「医療の現場にきちんと届けられなければ、意味があ
                        りません。その重要な任務を背負い、日本の医療にとって無くてはならない存在が、医療機器の流通を担う医療機器販売業です。 </p>
                    <p class="text-18">流通を担うと言っても、医療機器販売業者の機能はそれだけではありません。医療機器の機能は年々
                        高度化しています。最新の医療機器を医師や看護師が最初から正しく使いこなすのは、簡単ではありません。医師スタッフが医療機器を適切に使用できるように現場でサポートするのが、医療機器販売業者です。さらには、現場のニーズをメーカー側に伝え、新たな機器の開発につなげるなどの役割もあります。
                    </p>
                    <p class="text-18">日本の医療の特徴の一つは、地域密着型の小規模な医療機関の存在です。おかげで、都市部
                        から離れた地域の住民でも必要かつ適切な医療サービスを受けられます。しかし、その医療機関も、同様に地域密着型の医療機器販売業者の存在なしには成り立ちません。つまり医療機器
                        販売業者は、地域医療を支える一員なのです。</p>
                    <p class="text-18">厚生労働省は、高齢者が住み慣れた場所で自分らしい人生を全うできるよう、地域包括ケア
                        システムの構築をめざしています。在宅ケアが進めば、専門家以外でも簡単に操作できる医療機器が開発され、医療機器販売業者が地域の人たちを直接サポートする機会も生まれるでしょ
                        う。人命と密接にかかわるだけに責任も増しますが、より社会貢献度の高い業界になることは間違いありません。 </p>

                    <div class="infobox d-flex">
                        <img src=" {{ asset('/front-pages/images/recruit/img-8.png') }}" alt="" class="full-width" />
                        <div class="bg-gray">
                            <p class="text-bold-16 mb-2">
                                厚生労働省 前医政局経済課 医療機器政策室長
                            </p>
                            <p class="text-bold-20">小林秀幸 氏</p>
                            <p class="text-18">
                                1997年10月、厚生省に入省。環境庁環境保健部環境安全課、厚生省医薬安全局安全対策課（監視指導課併任）、健康局結核感染症課、医薬食品局副作用被害対策室、老健局老人保健課などを経て、2010年に富山県庁に出向。2012年富山県厚生部長、2013年環境省環境保健部特殊疾病対策室長、2015年文部科学省研究振興局先端医科学研究企画官に歴任し、2017年7月より医政局経済課医療機器政策室長を務めた。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="note mt-7">Q&A</div>
                <div class="heading-2 text-center color-3 mt-5">「責任感・やりがいはトップ級」 若手社員が語る医療機器販売 </div>
                <p class="text-18 mt-5">医療機器販売とはどんな仕事なのか。一般社団法人
                    日本医療機器販売業協会加盟企業の入社1~4年目の若手社員にアンケート調査したところ、「人命に携わる」「幅広く人の役に立てる」「地域に貢献できる」など、責任の重さと、そこから生まれるやりがいを強調する声が目立った。販売の最前線で働く若手社員の生の声を通じ、医療機器販売の素顔に迫った。
                </p>

                <div class="row qna-links mt-5">
                    <div class="col-6 col-sm-3 qna-1">
                        <a href="#qna-1">
                            <div>
                                <h4>Q1</h4>
                                <p class="text-bold-16">
                                    <br>
                                    この仕事にはじめて<br>
                                    携わったときの感想
                                </p>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-3 qna-2">
                        <a href="#qna-2">
                            <div>
                                <h4>Q2</h4>
                                <p class="text-bold-16">
                                    仕事をしていて<br>
                                    うれしかったこと <br>
                                    誇りを感じたエピソード
                                </p>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-3 qna-3">
                        <a href="#qna-3">
                            <div>
                                <h4>Q3</h4>
                                <p class="text-bold-16">
                                    <br>
                                    医療機器販売業界を<br>
                                    就職先に選んだ理由
                                </p>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-3 qna-4">
                        <a href="#qna-4">
                            <div>
                                <h4>Q4</h4>
                                <p class="text-bold-16">
                                    <br>
                                    就職活動に臨む<br>
                                    後輩へ一言
                                </p>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-gray pt-4 pb-4">
        <div class="container bg-gray pb-4">
            <div class="row">
                <div class="offset-md-1 col-md-10 qna-list">
                    <div id="qna-1" class="card">
                        <div class="card-body">
                            <div class="heading-1">Q1</div>
                            <p class="text-bold-20">この仕事にはじめて携わったときの感想</p>
                            <div class="heading-2">「現場との近さ、専門性の高さに驚き」</div>
                            <p class="text-18">アンケートの答えでまず目立ったのが、責任の重さを指摘する声。入社後、はじめて仕事に携わっ
                                たときの感想を尋ねると、ある社員は「今まさに手術が始まろうとしている手術室の中で執力医との打ち合わせや機器の適正使用のアドバイスをすることもあると知り、医療現場との距離の近さやに仕事の専門生の高さに驚いた」(関東、営業職、入社3年目)と答えた。
                            </p>
                            <p class="text-18">
                                他にも、「手術用器械の説明では自分の説明の一つのミスが思いもよらない事故につながるのではないかと責任の重さを感じ、言葉づかいには特に気を付けた」(東北、営業職、入社1年目)、「自分が販売した医療機器が患者さんの治療に直接関わるため、ミスは許されない仕事だと感じた」(中国、営業職、入社3年目)など、責任の重大さをしっかりとする答えが目立つ。
                            </p>
                        </div>
                    </div>

                    <div id="qna-2" class="card">
                        <div class="card-body">
                            <div class="heading-1">Q2</div>
                            <p class="text-bold-20">仕事をしていてうれしかったこと、誇りを感じたエピソード</p>
                            <div class="heading-2">「医療に貢献できる喜び」「妊婦の感動を間近で」</div>
                            <p class="text-18">
                                想像以上の責任の重さに戸惑う声すらあるが、その責任の重さゆえに、仕事の達成感や、やりがいも大きいようだ。仕事でうれしかったことや誇りに感じたことを聞くと、ある社員は、「緊急手術で使用する医療器材の依頼があり、急いで準備し持ち込みをした。手術が無事終了し、医師、
                                現場スタッフからお礼の言葉を頂いたとき、患者さんの命をう医療に貢献できたという喜びを感じた」
                                (中国、営業職、入社2年目)と語った。「提案した製品によって患者さんの負担を軽減できた」 (東海、営業職、入社3年目)など、仕事の成果を実感できる場面が多い。</p>
                            <p class="text-18">
                                産婦人科の超音波診所装置(エコー)を担当する社員は、「機器のデモ立会い中、妊婦さんの涙を目にすることがある。エコーで、小さな胎児の心がパクパク動いているのが見えたり、心音が聞こえたりすると、ホッとするのか妊婦さんの目から自然と涙がこぼれてくる。自分の販売する製品が診察の役に立っているのはもちろん、妊婦さんに安心と感動を与えていると感する瞬間です」(九州、営業職、入社2年目)と心温まるエピソードを披露してくれた。
                            </p>
                            <p class="text-18">
                                また、「提案した機器が採用されたときは、交渉に4カ月かかったが大きな達成感があった」(近畿、営業職、入社3年目)、「初は営業先の病院のスタッフから会社名でしか呼んでもらえなかっ
                                たが、足しげく通ううちに名前で呼ばれるようになり、手術用の機器を発注してもらったときは、一人の医療関係者として認められたことを実感し本当にうれしかった」(東北、営業職、入社4年目)
                                など、努力が報われる世界でもあることも、アンケートから伝わってくる。</p>
                        </div>
                    </div>

                    <div id="qna-3" class="card">
                        <div class="card-body">
                            <div class="heading-1">Q3</div>
                            <p class="text-bold-20">医療機器販売業界を就職先に選んだ理由</p>
                            <div class="heading-2">「最先端の技術に触れる楽しさ」</div>
                            <p class="text-18">
                                しかし、必ずしも全員が、最初から人の命を救いたくてこの業界に就職したわけではない。志望理由を聞くと、「市場の成長性と安定性だけで選んだ」(近畿、営業職
                                、入社3年目)「最先端の医療技術に触れながら仕事ができるのは非常に面白いと感じた」(北陸、営業職、入社1年目)など、
                                実に様々だ。それでも、いざ仕事を始めると、アンケートからもわかるように、医療や社会への強い責任感や使命感が急速に芽生えてくる。「仕事が人を育てる」という言葉があるが、医療現器販売はまさに人を育てる仕事の典型と言えるだろう。
                            </p>
                        </div>
                    </div>

                    <div id="qna-4" class="card">
                        <div class="card-body">
                            <div class="heading-1">Q4</div>
                            <p class="text-bold-20">就職活動に臨む後輩へ一言</p>
                            <div class="heading-2">「他の業種で味わえない貴重な経験が魅力」</div>
                            <p class="text-18">
                                そんな医療機器販売築界で重く若手社員は、就職活動に臨む後輩たちに、「特殊な職種だが、その分他の職種では味わえない貴重な経験ができる仕事。少しでも興味があるなら、一度医療業界への道を考えてみてはいかがでしょうか」(四国、営業職、入社3年目)、「社会的責任感ややりがいは世の中の仕事の中でもトップクラス。仕事の先には常に人命があり非常にシビアな仕事だが、それでもやってみたいという方は私たちと共に張りましょう」(近畿、営業職、入社3年目)とエールを送
                                る。必要な専門知識や心構えについては「仕事を通じ自然と身につくので、難しく考えず是非挑戦してみてください」(東海、営業職、入社3年目)とアドバイスする声があった。 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection