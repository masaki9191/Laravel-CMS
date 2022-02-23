<div class='row'>
    <div class='col-md-8'>
        <div class="form-group">
            <label for="title">{{ __('Title') }}</label>
            <input type="text" class="form-control" name="title" value='{{ $management->title ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="description">{{ __('Description') }}</label>
            <textarea class='js-summernote' rows="10" name="description">{{ $management->description ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="management_date">{{ __('Management date') }}</label>
            <input type="text" class="js-flatpickr form-control bg-white" name="management_date"  placeholder="Y-m-d" value="{{ $management->management_date ?? '' }}">
        </div>
        @if(request()->get('type') == 0)
        <input type="hidden" name='type' value='0'>
        @endif
        @if(request()->get('type') != 0)
        <div class="form-group">
            <label for="status">{{ __('Status') }}</label>
            <select class="form-control" name="status">
                <option value="1" {{ $management->status == '1' ? 'selected':'' }}>Activate</option>
                <option value="0" {{ $management->status == '0' ? 'selected':'' }}>Deactivate</option>
            </select>
        </div>
        <div class="form-group">
            <label>{{ __('Files') }}</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-multiple-custom" name="file">
                <label class="custom-file-label" for="example-file-input-multiple-custom">Choose files</label>
            </div>
            @if ($management->model->count())
            <a href="{{ $management->model[0]->media_url }}" target="_blank">{{ __('Click here') }}</a>
            @endif
        </div>
        @endif
    </div>
</div>