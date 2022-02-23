<div class='row'>
    <div class='col-md-8'>
        <div class="form-group">
            <label for="title">会員番号</label>
            <input type="text" class="form-control" name="cms_member_no" value='{{ ($kaiin) ? $kaiin->cms_member_no : '' }}'>
        </div>
        <div class="form-group">
            <label for="status">所属区分</label>
            <select class="form-control" name="cms_kaiin_type">
                <option value="1" {{ $kaiin->cms_kaiin_type == '1' ? 'selected':'' }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">構成員</font></font></option>
                <option value="3" {{ $kaiin->cms_kaiin_type == '3' ? 'selected':'' }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">賛助会員</font></font></option>
                <option value="0" {{ $kaiin->cms_kaiin_type == '0' ? 'selected':'' }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">なし</font></font></option>
            </select>

        </div>
        <div class="form-group cms_corporation_type" style='display: none'>
            <label for="status">企業会員</label>
            <select class="form-control" name="cms_corporation_type">
                <option value="0" {{ $kaiin->cms_corporation_type == '0' ? 'selected':'' }}>--</option>
                <option value="4" {{ $kaiin->cms_corporation_type == '4' ? 'selected':'' }}>該当</option>
            </select>
        </div>
        <div class='group-sec'>
            <div class="form-group">
                <label for="status">団体名</label>
                <select class="form-control" name="cms_kaiin_member">
                    @foreach(App\Models\CmsKaiin::getGroupName() as $key=>$group)
                    <option value="{{ $key }}" {{ $key==$kaiin->cms_kaiin_member?'selected':'' }}>{{ $group }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="status">団体長</label>
                <select class="form-control" name="cms_kaiin_member_main">
                    <option value="0" {{ $kaiin->cms_kaiin_member_main == '0' ? 'selected':'' }}>--</option>
                    <option value="1" {{ $kaiin->cms_kaiin_member_main == '1' ? 'selected':'' }}>該当</option>
                </select>

            </div>
            <div class='group-sec-fields' style='padding:20px;display: none; background-color: gray'>
                <div class="form-group">
                    <label for="title">団体代表者役職</label>
                    <input type="text" class="form-control" name="cms_group_reptitle" value='{{ $kaiin->cms_group_reptitle ?? '' }}'>
                </div>
                <div class="form-group">
                    <label for="title">団体代表氏名</label>
                    <input type="text" class="form-control" name="cms_group_represen" value='{{ $kaiin->cms_group_represen ?? '' }}'>
                </div>
                <div class="form-group">
                    <label for="title">団体郵便番号</label>
                    <input type="text" class="form-control" name="cms_group_zip" value='{{ $kaiin->cms_group_zip ?? '' }}'>
                </div>
                <div class="form-group">
                    <label for="title">団体住所</label>
                    <input type="text" class="form-control" name="cms_group_zip" value='{{ $kaiin->cms_group_address ?? '' }}'>
                </div>
                <div class="form-group">
                    <label for="title">団体会社名</label>
                    <input type="text" class="form-control" name="cms_group_company" value='{{ $kaiin->cms_group_company ?? '' }}'>
                </div>
                <div class="form-group">
                    <label for="title">団体電話番号</label>
                    <input type="text" class="form-control" name="cms_group_tel" value='{{ $kaiin->cms_group_tel ?? '' }}'>
                </div>
                <div class="form-group">
                    <label for="title">団体FAX番号</label>
                    <input type="text" class="form-control" name="cms_group_fax" value='{{ $kaiin->cms_group_fax ?? '' }}'>
                </div>
            </div>
        </div>



        <div class="form-group">
            <label for="title">会社名</label>
            <input type="text" class="form-control" name="cms_kaiin_cname" value='{{ $kaiin->cms_kaiin_cname ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">会社名フリガナ</label>
            <input type="text" class="form-control" name="cms_kaiin_ckana" value='{{ $kaiin->cms_kaiin_ckana ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">営業所名</label>
            <input type="text" class="form-control" name="cms_kaiin_business" value='{{ $kaiin->cms_kaiin_business ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">郵便番号</label>
            <div class='row'>
                <div class='col-md-6'>
                    <input type="text" class="form-control" name="cms_kaiin_cpost1" value='{{ ($kaiin) ? $kaiin->cms_kaiin_cpost1 : ''}}'>
                </div>
                <div class='col-md-6'>
                    <input type="text" class="form-control" name="cms_kaiin_cpost2" value='{{ ($kaiin) ? $kaiin->cms_kaiin_cpost2 : ''}}'>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="title">住所</label>
            <input type="text" class="form-control" name="cms_kaiin_cadd" value='{{ $kaiin->cms_kaiin_cadd ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">代表者役職</label>
            <input type="text" class="form-control" name="cms_kaiin_reptitle" value='{{ $kaiin->cms_kaiin_reptitle ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">代表者名</label>
            <input type="text" class="form-control" name="cms_kaiin_represen" value='{{ $kaiin->cms_kaiin_represen ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">電話番号</label>
            <div class='row'>
                <div class='col-md-4'>
                    <input type="text" class="form-control" name="cms_kaiin_tel1" value='{{ ($kaiin) ? $kaiin->cms_kaiin_tel1 : ''}}'>
                </div>
                <div class='col-md-4'>
                    <input type="text" class="form-control" name="cms_kaiin_tel2" value='{{ ($kaiin) ? $kaiin->cms_kaiin_tel2 : ''}}'>
                </div>
                <div class='col-md-4'>
                    <input type="text" class="form-control" name="cms_kaiin_tel3" value='{{ ($kaiin) ? $kaiin->cms_kaiin_tel3 : ''}}'>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="title">FAX番号</label>
            <div class='row'>
                <div class='col-md-4'>
                    <input type="text" class="form-control" name="cms_kaiin_fax1" value='{{ ($kaiin) ? $kaiin->cms_kaiin_fax1 : ''}}'>
                </div>
                <div class='col-md-4'>
                    <input type="text" class="form-control" name="cms_kaiin_fax2" value='{{ ($kaiin) ? $kaiin->cms_kaiin_fax2 : ''}}'>
                </div>
                <div class='col-md-4'>
                    <input type="text" class="form-control" name="cms_kaiin_fax3" value='{{ ($kaiin) ? $kaiin->cms_kaiin_fax3 : ''}}'>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="title">URL</label>
            <input type="text" class="form-control" name="cms_kaiin_url" value='{{ $kaiin->cms_kaiin_url ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">ＩＤ</label>
            <input type="text" class="form-control" name="cms_kaiin_mail" value='{{ $kaiin->cms_kaiin_mail ?? '' }}'>
        </div>
         <input type='hidden' value='0' name='cms_kaiin_class'>
    </div>
</div>