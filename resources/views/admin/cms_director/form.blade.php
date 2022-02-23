<div class='row'>
    <div class='col-md-8'>
        <div class="form-group">
            <label for="title">{{ __('Name') }}</label>
            <input type="text" class="form-control" name="name" value='{{ $director->name ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="description">{{ __('Description') }}</label>
            <textarea id='js-ckeditor5-classic' name="description">{{ $director->description ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="sort_number">{{ __('Sort Number') }}</label>
            <input type="number" class="form-control"  name="sort_number" value="{{ $director->sort_number ?? '' }}">
        </div>
<!--        <div class="form-group">
            <label for="class_name">{{ __('Class') }}</label>
            <input type="text" class="form-control"  name="class_name" value="{{ $director->class_name ?? '' }}">
        </div>-->
        <div class="form-group">
            <label for="status">Class Name</label>
            <select class="form-control" name="cms_kaiin_member">
                @foreach(App\Models\CmsDirector::getRoles() as $key=>$role)
                <option value="{{ $key }}" {{ $key==$director->class_name?'selected':'' }}>{{ $role }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="company">{{ __('Company') }}</label>
            <input type="text" class="form-control"  name="company"   value="{{ $director->company ?? '' }}">
        </div>
    </div>
</div>