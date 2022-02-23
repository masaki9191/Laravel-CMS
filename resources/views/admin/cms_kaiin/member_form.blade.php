<div class='row'>
    <div class='col-md-8'>
        <div class="form-group">
            <label for="title">会員番号</label>
            <input type="text" class="form-control" name="cms_member_no" value='{{ ($kaiin) ? $kaiin->cms_member_no : '' }}'>
        </div>
        <div class="form-group">
            <label for="title">氏名</label>
            <input type="text" class="form-control" name="cms_kaiin_name1" value='{{ ($kaiin) ? $kaiin->cms_kaiin_name1 : '' }}'>
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
            <label for="title">代表者役職</label>
            <input type="text" class="form-control" name="cms_kaiin_reptitle" value='{{ $kaiin->cms_kaiin_reptitle ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">ＩＤ</label>
            <input type="text" class="form-control" name="cms_kaiin_mail" value='{{ $kaiin->cms_kaiin_mail ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">Mail1</label>
            <input type="text" class="form-control" name="cms_kaiin_mail1" value='{{ $kaiin->cms_kaiin_mail1 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">Mail2</label>
            <input type="text" class="form-control" name="cms_kaiin_mail2" value='{{ $kaiin->cms_kaiin_mail2 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">Mail3</label>
            <input type="text" class="form-control" name="cms_kaiin_mail3" value='{{ $kaiin->cms_kaiin_mail3 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">Pass</label>
            <input type="text" class="form-control" name="cms_kaiin_pass" value='{{ $kaiin->cms_kaiin_pass ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">Company name(hurigana)</label>
            <input type="text" class="form-control" name="company_name_hurigana" value='{{ $kaiin->company_name_hurigana ?? '' }}'>
        </div>

        <div class="form-group">
            <label for="title">Full name (hurigana)</label>
            <input type="text" class="form-control" name="full_name_hurigana" value='{{ $kaiin->full_name_hurigana ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">DOB</label>
            <input type="text" class="js-flatpickr form-control bg-white" name="dob" value='{{ $kaiin->dob ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">Prefecture</label>
            <input type="text" class="form-control" name="prefecture_no" value='{{ $kaiin->prefecture_no ?? '' }}'>
        </div>
        <div class="form-group mt-1 mb-1">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="group_leader" value='{{ $kaiin->cms_kaiin_block ?? '' }}'>
                <label class="form-check-label" for="example-checkbox-default1">Block area leader</label>
            </div>
        </div>
        <div class="form-group">
            <label for="title">Organization</label>
            <input type="text" class="form-control" name="organization" value='{{ $kaiin->organization ?? '' }}'>
        </div>
        <div class="form-group mt-1 mb-1">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="group_leader" value='{{ $kaiin->group_leader ?? '' }}'>
                <label class="form-check-label" for="example-checkbox-default1">Group leader</label>
            </div>
        </div>
        <div class="form-group">
            <label for="title">Group title</label>
            <input type="text" class="form-control" name="group_title" value='{{ $kaiin->group_title ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">Remarks1</label>
            <input type="text" class="form-control" name="remarks1" value='{{ $kaiin->remarks1 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">Remarks2</label>
            <input type="text" class="form-control" name="remarks2" value='{{ $kaiin->remarks2 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">Address1</label>
            <input type="text" class="form-control" name="address1" value='{{ $kaiin->address1 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">Address2</label>
            <input type="text" class="form-control" name="address2" value='{{ $kaiin->address2 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">Tel</label>
            <input type="text" class="form-control" name="cms_kaiin_tel1" value='{{ $kaiin->cms_kaiin_tel1 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">Fax</label>
            <input type="text" class="form-control" name="cms_kaiin_tel1" value='{{ $kaiin->cms_kaiin_fax1 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="status">Affiliation</label>
            <select class="form-control" name="cms_affiliation">
                 @foreach(App\Models\CmsKaiin::getAffiliation() as $aff)
                <option value="1" {{ $aff == $kaiin->cms_affiliation ? 'selected':'' }}>{{$aff}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="status">会議ファイルの表示</label>
            <select class="form-control" name="cms_kaiin_fileenabled">
                <option value="1" {{ $kaiin->cms_kaiin_fileenabled == '1' ? 'selected':'' }}>表示</option>
                <option value="2" {{ $kaiin->cms_kaiin_fileenabled == '2' ? 'selected':'' }}>非表示</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">委任状</label>
            <select class="form-control" name="cms_kaiin_master">
                <option value="0" {{ $kaiin->cms_kaiin_master == '0' ? 'selected':'' }}>---</option>
                <option value="1" {{ $kaiin->cms_kaiin_master == '1' ? 'selected':'' }}>表示</option>
            </select>
        </div>
        <div class="form-group">
            <label class="d-block">所属選択</label>
            @foreach(App\Models\CmsConferenceType::all() as $type)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="{{ $type->id }}" id="example-checkbox-inline1" name="cms_conference[]" {{ in_array($type->id,$kaiin->conferenceTypes->pluck('id')->toArray()) ? 'checked':'' }}>
                       <label class="form-check-label">{{ $type->name }}</label>
            </div>
            @endforeach
        </div>
        <input type='hidden' value='1' name='cms_kaiin_class'>
    </div>
</div>