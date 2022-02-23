@extends('frontend.what-is-jahid-layout')
@section('jp_title') 市場環境 @endsection
@section('title') Market @endsection
@section('body-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="note mt-8">医療機器市場</div>

            <div class="text-bold-20 mt-4">医療機器・用品の国内マーケット</div>
            <hr class="divider-primary">
            <div class="row">
                <div class="col-sm-6">
                    <p class="text-18">医療機器は、用途に合わせて価格帯も様々。高品質かつ安全な医療機器を提案し、健康寿命の延伸を支えるため、日々進歩しています。
                        医療機器・用品の国内マーケットも拡大を続けており、2010年度は2兆7,240億円であった市場規模は、2017年度は3兆2,180億円と、約4,940億円市場が拡大しています。医療技術の進歩、高齢化社会に伴う需要など、今後もマーケットは拡大していくと推測されます。</p>
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset('/front-pages/images/bar-chart.png') }}" alt="" class="full-width" />
                </div>
            </div>
            <p>（出典）株式会社アールアンドディ医療機器・用品年鑑2019年版市場分析編</p>
            <p>参考：2017年度の医療機器・用品（卸・小売業者直販分）のマーケットサイズは約2兆8,740億円。</p>

            <div class="text-bold-20 mt-5">国民医療費・構成割合</div>
            <hr class="divider-primary">
            <div class="row">
                <div class="col-sm-6">
                    <p class="text-18">2017年度の国民医療費の構成割合は、病気や怪我、入院などの費用である医科診療医療費が71.6％となっています。ここに歯科診療医療費の割合も入れると78.3％と約8割が診療医療費になっています。それだけ市場規模が大きくウエイトを占めているなかで医療機器は活用されており、国民の健康を支えています。</p>
                    <p>（出典）厚生労働省「平成29年度医療施設調査」</p>
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset('/front-pages/images/pie-chart.png') }}" alt="" class="full-width" />
                </div>
            </div>

            <div class="note mt-8">医療施設概要</div>
            <div class="text-bold-20 mt-4">全国の病院及び一般診療所の施設数</div>
            <hr class="divider-primary">
            <p class="text-18">日本は離島など僻地も含め全国津々浦々に医療機関があり、誰もが必要な時に必要な医療を受けることが出来ます。高齢化が進み医療や介護を必要とする人が増える中、全国各地で安定供給を通して医療を支えています。</p>
            <img src="{{ asset('/front-pages/images/map-chart.png') }}" alt="" class="full-width" />
			<p class="last-strange-text">（出典）〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</p>
        </div>
    </div>
</div>
@endsection