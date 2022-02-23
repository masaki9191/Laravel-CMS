<div class='row'>
    <div class='col-md-8'>
        <div class="form-group">
            <label for="title">{{ __('Title') }}</label>
            <input type="text" class="form-control" name="title" value='{{ $news->title ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="news_date">{{ __('News date') }}</label>
            <input type="text" class="js-flatpickr form-control bg-white" name="news_date" id="example-flatpickr-default" placeholder="Y-m-d" value="{{ $news->news_date ?? '' }}">
        </div>
        <div class="form-group">
            <label for="description">{{ __('Description') }}</label>
            <textarea class='js-summernote' name="description">{{ $news->description ?? '' }}</textarea>
        </div>
        <input type='hidden' value='{{$news && $news->type? $news->type : request()->get('type')}}' name='type'>
        <div class="form-group">
            <label>{{ __('Files') }}</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-multiple-custom" name="file">
                <label class="custom-file-label" for="example-file-input-multiple-custom">Choose files</label>
            </div>
            @if ($news->model->count())
            <a href="{{ $news->model[0]->media_url }}" target="_blank">{{ __('Click here') }}</a>
            @endif
        </div>
    </div>
</div>