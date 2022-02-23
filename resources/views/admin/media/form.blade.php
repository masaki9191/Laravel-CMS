<div class='row'>
    <div class='col-md-8'>
<!--        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input type="text" class="form-control" name="name" value='{{ $media->name ?? '' }}'>
        </div>-->
        <div class="form-group">
            <label>{{ __('ファイル') }}</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-multiple-custom" name="files[]" multiple="">
                <label class="custom-file-label" for="example-file-input-multiple-custom">ファイルを選択</label>
            </div>
        </div>
    </div>
</div>