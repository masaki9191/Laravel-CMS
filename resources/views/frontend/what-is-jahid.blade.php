@extends('layouts.frontend')
@section('content')
<div class="bg-header bg-what-is-jahid">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h4>概要</h4>
                        <div class="divider mt-4"></div>
                        <p class="mt-4">医療機器販売業の役割</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container main-content">
    <div class="row">
        <div class="offset-md-1 col-md-10">
            <div class="note mt-8">医療機器販売業紹介動画</div>
            <video class="jahid_video mt-4" controls poster="{{ asset('/front-pages/images/bg_video.png') }}">
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
			<p class="text-mark mt-4">全編動画の視聴はこちら</p>

            <div class="note mt-8">役割</div>
            <div class="text-bold-20 mt-4">医療機器販売業の役割</div>
            <hr class="divider-primary" />
            <p class="text-18">医療機器にはシリンジ、テープ類といった一般消耗品からペースメーカーや ステント、画像診断機器(エコー、CT、MRI等)など多種多様なものがあ り、その種類は約85万種類と言われています。</p>
            <p class="text-18">私たち医療機器販売業は、医療機器の安定供給に加え、医療従事者が適切な 医療機器を選択し患者さんの治療や診断を適正に行うために、手術等に合わ せ適正な医療機器を提案し、機器の貸し出しから手技中の立会い、術後の引 き上げなど総合的な適正使用支援を行っています。</p>
            <p class="text-18">これらの業務を通して医療機器販売業は、患者さんの安全のために、医療機 関のチーム医療を支える「拡大チーム医療」の一員として医療機関の幅広い ニーズに応え、また我が国の医療制度を支えるインフラとしての役割を果た しています。</p>
            <img src="{{ asset('/front-pages/images/jahid-chart-1.png') }}" alt="" class="jahid-chart-1 full-width" />

            <div class="note mt-5">社会的意義</div>
            <div class="text-bold-20 mt-4">医療機関に安全かつ 安定的に医療機器を供給</div>
            <hr class="divider-primary">
            <div class="row">
                <div class="col-sm-6">
                    <p class="text-18">私たち医療機器販売業は、国民皆保険、フリーアクセスという公的医療保険 制度のもと、全ての医療機関に安全かつ安定的に医療機器を供給して患者さ んの安心と医療制度維持に寄与しています。 また医療機器特有の個別性から、在庫管理、緊急時の対応などきめ細かい対 応が求められ、患者さんにとって効果的で質の高い医療の提供に貢献すると 共に、関係行政機関等との連携などにおいて医療機器流通の効率化を推進 し、日本の医療の発展に貢献する社会的意義のある業界です。</p>
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset('/front-pages/images/jahid-health-chart.png') }}" alt="" class="jahid-health-chart full-width" />
                </div>
            </div>

            <div class="text-bold-20 mt-4">医療機関と深く繋がり、包括的かつ 継続的に在宅医療・介護を支援</div>
            <hr class="divider-primary">
            <div class="row">
                <div class="col-sm-6">
                    <p class="text-18">在宅医療に関わる医療機器販売業者は、退院前から患者さん及びご家族と顔 を合わせ、患者さんの自宅での療養を支えるため医師の指示のもとサポート を行っています。また退院後には、定期訪問など患者さんの生活に合わせた 適切な支援の提供を行っています。このため医療機器販売業は、医師、看護 師、ケアマネジャー等の多職種との連携による支援体制の構築が必要になり ます。 高齢化が進む日本で、私たち医療機器販売業が担う役割は増加し、また多様 化しつつあります。 こうした状況のなか医療機器販売業は医療機関との深い繋がりを意識し、地 域の関係機関と連携し包括的かつ継続的な在宅医療・介護の提供を目指すべく、積極的に患者支援業務に取り組んでいます。</p>
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset('/front-pages/images/significance.png') }}" alt="" class="full-width" />
                </div>
            </div>

            <div class="note mt-8">適正使用支援</div>
            <div class="text-bold-20 mt-4">医療機関と 医療機器メーカーのパイプ役</div>
            <hr class="divider-primary">
            <p class="text-18">私たち医療機器販売業は、メーカーが作った医療機器を医療機関に届けるという役割を担っていますが、単に届けるだけでなく適正使用支援業務を通じ医療機 関をサポートしています。また、医療機器に関する新しい情報をキャッチし、医療機関に知らせるとともに、医療機関からの要望をお聞きしてメーカーに伝え ることも行っています。医療現場と医療機器メーカーとの間をつなぐ情報の流通も担っているのです。</p>

            <div class="text-bold-20 mt-8">適正使用支援業務の流れ 適正使用支援とは?</div>
            <hr class="divider-primary">
            <img src="{{ asset('/front-pages/images/jahid-chart-2.png') }}" alt="" class="jahid-chart-2 full-width" />
        </div>
    </div>
</div>
@endsection