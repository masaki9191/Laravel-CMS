@extends('frontend.about-layout')
@section('jp_title') 会員紹介  @endsection
@section('title')Member introduction @endsection
@section('about-content')
<div class="container pb-5">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div class="members mt-8">
                        <ul>
                            <li><strong>団体会員：</strong>43</li>
                            <li><strong>構成員：</strong>1009社</li>
                            <li><strong>企業会員：</strong>158社</li>
                            <li><strong>賛助会員：</strong>134社</li>
                        </ul>
                    </div>
                    <p class="text-right"><small>2020年12月24日現在</small></p>
                    <div class="note mt-5">JAHID全会員一覧</div>
                    <ul class="downloads mt-4">
                        <li>
                            <img src="./assets/images/pdf-icon.png" alt="">
                            <p>会員名簿（2019年9月12日現在）</p>
                            <a href="#">Download <i class="fa fa-download"></i></a>
                        </li>
                    </ul>

                    <div class="note mt-7">団体会員・企業会員</div>

                    <div class="text-bold-20 mt-4">団体会員</div>
                    <hr class="divider-primary" />
                    <p class="text-18">各都道府県の医療機器販売業協会または医療機器協会です。<br>
                        医療機器販売業者は各都道府県協会への入会により、各都道府県協会の会員であると同時に当協会<br>
                        の構成員になります。
                    </p>

                    <div class="text-bold-20 mt-4">企業会員</div>
                    <hr class="divider-primary" />
                    <p class="text-18">医療機器販売業者で、当協会に直接加入している企業です。</p>

                </div>
            </div>
        </div>
        <div class="container-fluid bg-gray pb-5 region-selector">
            <div class="container">
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                        <form action="">
                            <div class="card regions-card mt-10">
                                <div class="card-body">
                                    <p class="text-bold-20">地域選択（本社所在地）</p>
                                    <div class="container">
                                        <div class="row regions">
                                            <div class="boxes">
                                                <a href="javascript:void(0);">
                                                    <div>
                                                        <p>全国</p>
                                                        <img src="{{ asset('/front-pages/images/map-1.png') }}">
                                                    </div>
                                                    <input type="radio" name="region" value="全国"/>
                                                </a>
                                            </div>
                                            <div class="boxes">
                                                <a href="javascript:void(0);">
                                                    <div>
                                                        <p>北海道</p>
                                                        <img src="{{ asset('/front-pages/images/map-2.png') }}">
                                                    </div>
                                                    <input type="radio" name="region" value="北海道"/>
                                                </a>
                                            </div>
                                            <div class="boxes">
                                                <a href="javascript:void(0);">
                                                    <div>
                                                        <p>東北</p>
                                                        <img src="{{ asset('/front-pages/images/map-3.png') }}">
                                                    </div>
                                                    <input type="radio" name="region" value="東北"/>
                                                </a>
                                            </div>
                                            <div class="boxes">
                                                <a href="javascript:void(0);">
                                                    <div>
                                                        <p>関東甲信越</p>
                                                        <img src="{{ asset('/front-pages/images/map-4.png') }}">
                                                    </div>
                                                    <input type="radio" name="region" value="関東甲信越"/>
                                                </a>
                                            </div>
                                            <div class="boxes">
                                                <a href="javascript:void(0);">
                                                    <div>
                                                        <p>北陸</p>
                                                        <img src="{{ asset('/front-pages/images/map-5.png') }}">
                                                    </div>
                                                    <input type="radio" name="region" value="北陸"/>
                                                </a>
                                            </div>
                                            <div class="boxes">
                                                <a href="javascript:void(0);">
                                                    <div>
                                                        <p>東海</p>
                                                        <img src="{{ asset('/front-pages/images/map-6.png') }}">
                                                    </div>
                                                    <input type="radio" name="region" value="東海"/>
                                                </a>
                                            </div>
                                            <div class="boxes">
                                                <a href="javascript:void(0);">
                                                    <div>
                                                        <p>関西</p>
                                                        <img src="{{ asset('/front-pages/images/map-7.png') }}">
                                                    </div>
                                                    <input type="radio" name="region" value="関西"/>
                                                </a>
                                            </div>
                                            <div class="boxes">
                                                <a href="javascript:void(0);">
                                                    <div>
                                                        <p>中国</p>
                                                        <img src="{{ asset('/front-pages/images/map-8.png') }}">
                                                    </div>
                                                    <input type="radio" name="region" value="中国"/>
                                                </a>
                                            </div>
                                            <div class="boxes">
                                                <a href="javascript:void(0);">
                                                    <div>
                                                        <p>四国</p>
                                                        <img src="{{ asset('/front-pages/images/map-9.png') }}">
                                                    </div>
                                                    <input type="radio" name="region" value="四国"/>
                                                </a>
                                            </div>
                                            <div class="boxes">
                                                <a href="javascript:void(0);">
                                                    <div>
                                                        <p>九州</p>
                                                        <img src="{{ asset('/front-pages/images/map-10.png') }}">
                                                    </div>
                                                    <input type="radio" name="region" value="九州"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-bold-20 mt-4">会員種別選択</p>
                                    <div class="members">
                                        <label><input type="checkbox" name="" value="団体会員"><p class="mt-1">団体会員</p></label>
                                        <label><input type="checkbox" name="" value="企業会員"><p class="mt-1">企業会員</p></label>
                                    </div>
                                    <button class="btn btn-warning full-width mt-5 rounded-10" type="submit">検索 <i class="fa fa-chevron-right"></i></button>     
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5 mt-10">
            <div class="row mt-10">
                <div class="offset-md-1 col-md-10  mt-10">
                    <div class="note mt-5">賛助会員</div>
                    <p class="text-18 mt-4">当協会の活動目的に賛同し、ご支援いただける企業の皆様です。</p>

                    <div class="row lines mt-5">
                        <div class="col-3 col-sm-1 mr-4"><button type="button" class="btn-link font-weight-bold">あ行</button></div>
                        <div class="col-3 col-sm-1 mr-4"><button type="button" class="btn-link font-weight-bold">か行</button></div>
                        <div class="col-3 col-sm-1 mr-4"><button type="button" class="btn-link font-weight-bold">さ行</button></div>
                        <div class="col-3 col-sm-1 mr-4"><button type="button" class="btn-link font-weight-bold">た行</button></div>
                        <div class="col-3 col-sm-1 mr-4"><button type="button" class="btn-link font-weight-bold">な行</button></div>
                        <div class="col-3 col-sm-1 mr-4"><button type="button" class="btn-link font-weight-bold">は行</button></div>
                        <div class="col-3 col-sm-1 mr-4"><button type="button" class="btn-link font-weight-bold">ま行</button></div>
                        <div class="col-3 col-sm-1 mr-4"><button type="button" class="btn-link font-weight-bold">や行</button></div>
                        <div class="col-3 col-sm-1 mr-4"><button type="button" class="btn-link font-weight-bold">ら行</button></div>                        
                    </div>

                    <div class="text-bold-20 mt-4">あ行</div>
                    <hr class="divider-primary" />
                    <table class="table officer-table table-bordered mt-4">
                        <tr>
                            <th class="align-middle text-center" rowspan="8">あ行</th>
                            <td><a href="#">アールイーメディカル（株）</a></td>
                        </tr>
                        <tr>
                        <td><a href="#">アイ・エム・アイ（株）</a></td></tr>
                        <td><a href="#">（株）秋山製作所</a></td></tr>
                        <td><a href="#">旭化成メディカル（株）</a></td></tr>
                        <td><a href="#">アズワン（株）</a></td></tr>
                        <td><a href="#">アトムメディカル（株）</a></td></tr>
                        <td><a href="#">アニマ（株）</a></td></tr>
                        <td><a href="#">アボット メディカルジャパン（合）</a></td></tr>
                    </table>

                    <div class="text-bold-20 mt-4">か行</div>
                    <hr class="divider-primary" />
                    <table class="table officer-table table-bordered mt-4">
                        <tr>
                            <th class="align-middle text-center" rowspan="9">か行</th>
                            <td><a href="#">カイロス（株）</a></td>
                        </tr>
                        <tr>
                        <td><a href="#">アイ・エム・アイ（株）</a></td></tr>
                        <td><a href="#">花王プロフェッショナルサービス（株）</a></td></tr>
                        <td><a href="#">（株）カネカメディックス</a></td></tr>
                        <td><a href="#">Cardinal Health Japan 合同会社</a></td></tr>
                        <td><a href="#">川澄化学工業（株）</a></td></tr>
                        <td><a href="#">川本産業（株）</a></td></tr>
                        <td><a href="#">キヤノンライフケアソリューションズ(株)</a></td></tr>
                        <td><a href="#">京セラ（株）</a></td></tr>
                    </table>
                </div>
            </div>
        </div>
@endsection
