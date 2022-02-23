<div class='row'>
    <div class='col-md-8'>
        <div class="form-group">
            <label for="title">{{ __('Title') }}</label>
            <input type="text" class="form-control" name="title" value='{{ $topic->title ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="description">{{ __('Description') }}</label>
            <textarea id='js-ckeditor5-classic' name="description">{{ $topic->description ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="sort_number">{{ __('Button text') }}</label>
            <input type="text" class="form-control"  name="button_text" value="{{ $topic->button_text ?? '' }}">
        </div>
        <div class="form-group">
            <label for="class_name">{{ __('Url') }}</label>
            <input type="url" class="form-control"  name="url" value="{{ $topic->url ?? '' }}">
        </div>
    </div>
</div>