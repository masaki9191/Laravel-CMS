<div class="container">
    <div class="row pb-3">
        <div class="offset-md-1 col-md-10">
            <div class="row about-intro">
                <div class="col-sm-12 pb-5 text">
                    <div>
                        <h4 class="headingfontsize special_padding">継続的研修参加お申し込み</h4>
                    </div>
                </div>
                <div class="col-sm-12 pb-5 text">
                    <div class="p-3 special_padding" style="background:#F2FAFD">
                        <p><b>医療機器販売業・貸与業の営業所管理者及び医療機器修理業の医療機器修理責任技術者に対する継続的研修</b></p>
                        <p><b>主催 </b> 　日本医療機器販売業協会</p>
                        <p><b>共催 </b>　埼玉県医療機器販売業協会</p>
                    </div>
                </div>
                <div class="col-sm-12 pb-5 text">
                    <div class="p-3">
                        <p>※FAX番号以外は必ずご入力をお願い致します。</p>
                        <p>※ご入力の際には半角カタカナはご使用できません。</p>
                    </div>
                </div>
                <div class="col-sm-12 pb-5 text">
                    <div class="p-3 special_padding" style="background:#D6F1F5">
                        <p><b>開催日：</b> 2020年12月1日（火）</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5">
        <div class="offset-md-1 col-md-10">
            <div class="col-sm-12 p-0 text">
                <div class="border_bottom-2">
                    <h4 class="headingfontsize pb-2">受講者</h4>
                </div>
            </div>
            <div class="col-sm-12 p-0">
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>氏名</b> <span class='warning_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-4 pt-4'>
                            <div class="form-group">
                                <input type="text" class='form-control input-box' name="name1">
                                <label>坂口</label>
                            </div>
                        </div>
                        <div class='col-sm-4 pt-4'>
                            <div class="form-group">
                                <input type="text" class='form-control input-box' name="name2">
                                <label>広大</label>
                            </div>
                        </div>
                    </div></div>
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>ふりがな</b> <span class='warning_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-4 pt-4'>
                            <div class="form-group">
                                <input type="text" class='form-control input-box' name="kana1">
                                <label>さかぐち</label>
                            </div>
                        </div>
                        <div class='col-sm-4 pt-4'>
                            <div class="form-group">
                                <input type="text" class='form-control input-box' name="kana2">
                                <label>こうだい</label>
                            </div>
                        </div>
                    </div></div>
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>性別</b> <span class='warning_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-4 pt-4'>
                            <div class="form-group">
                                <input type="radio" name="sex" value="1" checked>
                                <label>男</label>
                                <input type="radio" name="sex" value="2">
                                <label>女</label>
                            </div>
                        </div>

                    </div></div>
            </div>
        </div>
    </div>
    <div class="row pb-5">
        <div class="offset-md-1 col-md-10">
            <div class="col-sm-12 pb-5 pr-0 pl-0 text">
                <div class="border_bottom-2">
                    <h4 class="headingfontsize pb-2">現住所</h4>
                </div>
            </div>
            <div class="col-sm-12 p-0 post-sec">
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>郵便番号</b> <span class='warning_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-2 pt-4'>
                            <div class="form-group">
                                <input type="text" name="post1" class='form-control input-box post1'>
                            </div>
                        </div>
                        <div class='col-sm-2 pt-4'>
                            <div class="form-group">
                                <input type="text" name="post2" class='form-control input-box post2'>
                            </div>
                        </div>
                        <div class='col-sm-4 pt-4'>
                            <button type ="button" class='btn btn-custom post-address-btn' data-url="{{ route('getAddressByPostCode') }}">郵便番号検索</button>
                        </div>
                    </div></div>
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>現住所</b> <span class='warning_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-8 pt-4'>
                            <div class="form-group">
                                <select name="address1" class='select-box'>
                                    @foreach($masters as $master)
                                    <option value="{{  $master->id }}">{{ $master->ken }}</option>
                                    @endforeach
                                </select>
                                <label>都道府県は左で選択しますので、入力する住所欄には不要です。</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="address2" class='form-control input-box post-address'>
                                <label>住所欄は丁目、番地、号までご入力ください</label>
                            </div>
                        </div>

                    </div></div>

            </div>
        </div>
    </div>
    <div class="row pb-5">
        <div class="offset-md-1 col-md-10">
            <div class="col-sm-12 pr-0 pl-0 pb-5 text">
                <div class="border_bottom-2">
                    <h4 class="headingfontsize pb-2">勤務先</h4>
                </div>
            </div>
            <div class="col-sm-12 p-0">
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>会社名</b> <span class='warning_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-8 pt-4'>
                            <div class="form-group">
                                <input type="text"  name="cname" class='form-control input-box'>
                                <label>会社名を入力してください</label>
                            </div>
                        </div>
                    </div></div>
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>営業所名</b> <span class='info_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-8 pt-4'>
                            <div class="form-group">
                                <input type="text" name="ceigyou"  class='form-control input-box'>
                                <label>営業所名を入力してください</label>
                            </div>
                        </div>

                    </div></div>
                <div class="post-sec">
                    <div class="border_bottom">
                        <div class="row ">
                            <div class='col-sm-4 pt-4'>
                                <p><b>郵便番号</b> <span class='warning_bg'>必須</span></p>
                            </div>
                            <div class='col-sm-2 pt-4'>
                                <div class="form-group">
                                    <input type="text" name="cpost1" class='form-control input-box post1'>
                                </div>
                            </div>
                            <div class='col-sm-2 pt-4'>
                                <div class="form-group">
                                    <input type="text" name="cpost2"  class='form-control input-box post2'>
                                </div>
                            </div>
                            <div class='col-sm-4 pt-4'>
                                <button type = "button" class='btn btn-custom post-address-btn' data-url="{{ route('getAddressByPostCode') }}">郵便番号検索</button>
                            </div>
                        </div>
                    </div>
                    <div class="border_bottom">
                        <div class="row">
                            <div class='col-sm-4 pt-4'>
                                <p><b>所在地</b> <span class='warning_bg'>必須</span></p>
                            </div>
                            <div class='col-sm-8 pt-4'>
                                <div class="form-group">
                                    <select name="caddress1" class='select-box'>
                                        @foreach($masters as $master)
                                        <option value="{{  $master->id }}">{{ $master->ken }}</option>
                                        @endforeach
                                    </select>
                                    <label>都道府県は左で選択しますので、入力する住所欄には不要です。</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="caddress2" class='form-control input-box post-address'>
                                    <label>住所欄は丁目、番地、号までご入力ください</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5">
        <div class="offset-md-1 col-md-10">
            <div class="col-sm-12 pr-0 pl-0 pb-5 text">
                <div class="border_bottom-2">
                    <h4 class="headingfontsize pb-2">連絡先</h4>
                </div>
            </div>
            <div class="col-sm-12 p-0">
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>メールアドレス</b> <span class='warning_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-8 pt-4'>
                            <div class="form-group">
                                <input type="text" name="mail" class='form-control input-box' >
                                <label>メールアドレスを入力してください</label>
                            </div>
                        </div>
                    </div></div>
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>メールアドレス再入力</b> <span class='info_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-8 pt-4'>
                            <div class="form-group">
                                <input type="text" name="confirm_mail" class='form-control input-box'>
                                <label>もう一度メールアドレスを入力してください</label>
                            </div>
                        </div>

                    </div></div>
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>電話番号</b> <span class='warning_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-8 pt-4'>
                            <div class="form-group">
                                <input type="text" class='input-box-1' name="tel1"> - <input type="text" class='input-box-1' name="tel2"> - <input type="text" class='input-box-1' name="tel3">
                                <label>電話番号を入力してください</label>
                            </div>
                        </div>

                    </div></div>
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>FAX番号</b> <span class='info_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-8 pt-4'>
                            <div class="form-group">
                                <input type="text" class='input-box-1' name="fax1" > - <input type="text" class='input-box-1'name="fax2"> - <input type="text" class='input-box-1' name="fax3">
                                <label>FAX番号を入力してください</label>
                            </div>
                        </div>

                    </div></div>
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>会員区分</b> <span class='warning_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-8 pt-4'>
                            <div class="form-group">
                                <input type="radio" checked name="member" value="1">
                                <label>一般社団法人 日本医療機器販売業協会 会員</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="member" value="2">
                                <label>非会員</label>
                            </div>
                        </div>

                    </div></div>
            </div>
        </div>
    </div>
    <div class="row pb-5">
        <div class="offset-md-1 col-md-10">
            <div class="col-sm-12 pb-5 pr-0 pl-0 text">
                <div class="border_bottom-2">
                    <h4 class="headingfontsize pb-2">テスト質問</h4>
                </div>
            </div>
            <div class="col-sm-12 p-0">
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>届出の種類</b> <span class='warning_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-8 pt-4'>
                            <div class="form-group">
                                <input type="radio" checked value="1" name="notification">
                                <label>医薬品医療機器等法その他薬事に関する法令</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" value="2" name="notification">
                                <label>医療機器の品質管理</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" value="3" name="notification">
                                <label>医療機器の不具合報告及び回収報告</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" value="4" name="notification">
                                <label>医療機器の情報提供</label>
                            </div>
                        </div>
                    </div></div>
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>（公財）医療機器センター</b> <span class='warning_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-8 pt-4'>
                            <div class="form-group">
                                <input type="radio" checked name="agency" value="1">
                                <label>医薬品医療機器等法その他薬事に関する法令</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="agency" value="2">
                                <label>（一社）日本ホームヘルス機器協会</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="agency" value="3">
                                <label>（公財）総合健康推進財団</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="agency" value="4">
                                <label>基礎講習免除者（医師・歯科医師・薬剤師等）</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="agency" value="5">
                                <label>その他</label>
                            </div>
                        </div>
                    </div></div>
                <div class="border_bottom">
                    <div class="row">
                        <div class='col-sm-4 pt-4'>
                            <p><b>質問１</b> <span class='warning_bg'>必須</span></p>
                        </div>
                        <div class='col-sm-8 pt-4'>
                            <div class="form-group">
                                <input type="radio" checked name="question1" value="1">
                                <label>テスト答え①</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="question1" value="2">
                                <label>テスト答え②</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="question1" value="3">
                                <label>テスト答え③</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="question1" value="4">
                                <label>テスト答え④</label>
                            </div>
                            <div class="form-group">
                                <input type="radio"name="question1" value="5" >
                                <label>テスト答え⑤</label>
                            </div>
                        </div>
                    </div></div>
                <input type="hidden" name="kensyu_id" value="{{ request()->get('kensyu_id') }}" />
            </div>
        </div>
    </div>
    <div class="row pb-5">
        <div class="offset-md-1 col-md-10">
            <div class="col-sm-12 pb-5 text">
                <p>申込完了メールにつきましては、申込内容を確認後「kenshu@jahid.gr.jp」より、休日を除き5日以内に送付させていただきます。</p>
                <p>5日以内にメールが届かない場合は当協会へFAXでお問合わせください。（FAX:03-5689-7919）</p>
            </div>
        </div>
    </div>
    <div class="row pb-5">
        <div class="offset-md-1 col-md-10">
            <div class="col-sm-12 text-center pb-5 text">
                <button type='submit' class='btn btn-below-2 form-preview-btn'>内容確認 <i class="fa fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</div>
