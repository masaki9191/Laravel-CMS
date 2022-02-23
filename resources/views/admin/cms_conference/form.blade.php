<div class='row'>
    <div class='col-md-8'>
        <div class="form-group">
            <label for="title">会議番号</label>
            <input type="text" class="form-control" name="cms_conference_sortnum" value='{{ $conference->cms_conference_sortnum ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="status">会議種別</label>
            <select class="form-control" name="cms_conference_type">
                @foreach(App\Models\CmsConferenceType::all() as $key=>$type)
                <option value="{{ $type->id }}" {{ $type->id==$conference->cms_conference_type?'selected':'' }}>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">会議名</label>
            <input type="text" class="form-control" name="cms_conference_conf" value='{{ $conference->cms_conference_conf ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="news_date">開催日時</label>
            <div class='row'>
                <div class='col-md-6'>
                    <input type="text" class="js-flatpickr form-control bg-white" name="cms_conference_holding1" id="example-flatpickr-default" placeholder="Y-m-d" value="{{ $conference->cms_conference_holding1 ?? '' }}">
                </div>
                <div class='col-md-3'>
<!--                    <select class="form-control" name="cms_conference_holding2">
                        @foreach(App\Models\CmsConference::getTimes() as $key=>$time)
                        <option value="{{ $key }}" {{ $key==$conference->cms_conference_holding2?'selected':'' }}>{{ $time }}</option>
                        @endforeach
                    </select>-->
                    <input type="text" class="js-flatpickr form-control bg-white" name="cms_conference_holding2" id="example-flatpickr-default" placeholder="H:i" data-time_24hr="true" data-enable-time="true" data-no-calendar="true" value="{{ $conference->cms_conference_holding2 ?? '' }}">
                </div>
                <div class='col-md-3'>
<!--                    <select class="form-control" name="cms_conference_holding3">
                       @foreach(App\Models\CmsConference::getTimes() as $key=>$time)
                       <option value="{{ $key }}" {{ $key==$conference->cms_conference_holding3?'selected':'' }}>{{ $time }}</option>
                       @endforeach
                   </select>-->
                    <input type="text" class="js-flatpickr form-control bg-white" name="cms_conference_holding3" id="example-flatpickr-default" placeholder="H:i" data-time_24hr="true" data-enable-time="true" data-no-calendar="true" placeholder="H:i" value="{{ $conference->cms_conference_holding3 ?? '' }}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="title">場所</label>
            <input type="text" class="form-control" name="cms_conference_place" value='{{ $conference->cms_conference_place ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="description">詳細</label>
            <textarea id='js-ckeditor5-classic' name="description">{{ $conference->cms_conference_text ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="description">{{ __('File Url') }}</label>
            <input type="url" class="form-control" name="cms_conference_filename" value='{{ $conference->cms_conference_filename ?? '' }}'>
        </div>
        <div class="form-group">
            <label>{{ __('Files') }}</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-multiple-custom" name="file">
                <label class="custom-file-label" for="example-file-input-multiple-custom">Choose files</label>
            </div>
            @if ($conference->model->count())
            <a href="{{ $conference->model[0]->media_url }}" target="_blank">{{ __('Click here') }}</a>
            @endif
        </div>
    </div>
</div>