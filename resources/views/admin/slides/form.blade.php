<!--<div class='row'>
    <div class='col-md-8'>
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input type="text" class="form-control" name="name" value='{{ $media->name ?? '' }}'>
        </div>
        <div class="form-group">
            <label>{{ __('Files') }}</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-multiple-custom" name="files[]" multiple="">
                <label class="custom-file-label" for="example-file-input-multiple-custom">Choose files</label>
            </div>
            <input type="hidden" value="1" name="type">
        </div>
    </div>
</div>-->

<div class='row'>
    <div class='col-md-8'>
        <div class="form-group">
            <label for="title">{{ __('Title') }}</label>
            <input type="text" class="form-control" name="title" value='{{ $slide->title ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="description">{{ __('Sub title') }}</label>
            <input type="text" class="form-control" name="sub_title" value='{{ $slide->sub_title ?? '' }}'>
        </div>
        <div class="form-group">
            <label>{{ __('Files') }}</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-multiple-custom" name="file">
                <label class="custom-file-label" for="example-file-input-multiple-custom">Choose files</label>
            </div>
            @if ($slide->model->count())
            <a href="{{ $slide->model[0]->media_url }}" target="_blank">{{ __('Click here') }}</a>
            @endif
        </div>
    </div>
</div>