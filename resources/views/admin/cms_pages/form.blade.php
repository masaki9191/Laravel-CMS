<div class='row'>
    <div class='col-md-10'>
        <div class="form-group">
            <label for="title">{{ __('Title') }}</label>
            <input type="text" class="form-control" name="title" value='{{ $page->title ?? '' }}'  {{ $page->title ? "readonly":"" }}>
        </div>
<!--        <div class="form-group">
            <label for="status">{{ __('Status') }}</label>
            <select class="form-control" name="status">
                <option value="1" {{ $page->status == '1' ? 'selected':'' }}>Activate</option>
                <option value="0" {{ $page->status == '0' ? 'selected':'' }}>Deactivate</option>
            </select>
        </div>
        <div class="form-group">
            <label for="type">{{ __('Type') }}</label>
            <select class="form-control" name="type">
                <option value="1" {{ $page->type == '1' ? 'selected':'' }}>Cms Page</option>
            </select>
        </div>-->
        <div class="form-group">
            <label for="description">{{ __('Description') }}</label>
            <!--<textarea id='js-ckeditor5-classic' name="description">{{ htmlentities($page->description) ?? '' }}</textarea>-->
            <textarea class="form-control js-summernote" rows="40" name="description">{{ $page->description ?? '' }}</textarea>
        </div>
<!--        <div class="form-group">
            <div class="custom-control custom-switch mb-1">
                <input type="checkbox" class="custom-control-input" value="1" id="example-sw-custom1" name="authentication_required" {{ $page->authentication_required ? 'checked':'' }}>
                <label class="custom-control-label" for="example-sw-custom1">{{ __('Authentication required') }}</label>
            </div>
        </div>-->
    </div>
</div>