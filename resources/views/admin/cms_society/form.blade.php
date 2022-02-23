<div class='row'>
    <div class='col-md-8'>
        <div class="form-group">
            <label for="title">{{ __('Sort Number') }}</label>
            <input type="number" class="form-control" name="cms_society_sortnum" value='{{ $society->cms_society_sortnum ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="description">{{ __('Description') }}</label>
            <input type="text" class="form-control" name="cms_society_text" value='{{ $society->cms_society_text ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="sort_number">{{ __('Date') }}</label>
            <input type="text" class="form-control"  name="cms_society_date" value="{{ $society->cms_society_date ?? '' }}">
        </div>
    </div>
</div>