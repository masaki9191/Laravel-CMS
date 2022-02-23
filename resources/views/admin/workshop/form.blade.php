<div class='row'>
    <div class='col-md-8'>
        <div class="form-group">
            <label for="title">{{ __('Workshop number') }}</label>
            <input type="text" class="form-control" name="no" value='{{ ($workshop) ? $workshop->no : '' }}'>
        </div>
        <div class="form-group">
            <label for="status">{{ __('Type') }}</label>
            <select class="form-control" name="type">
                <option value="1" {{ $workshop->type == '1' ? 'selected':'' }}>On going</option>
                <option value="2" {{ $workshop->type == '2' ? 'selected':'' }}>Other</option>
                <option value="3" {{ $workshop->type == '2' ? 'selected':'' }}>Seminar</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">{{ __('都道府県') }}</label>
            <input type="text" class="form-control" name="ken" value='{{ ($workshop) ? $workshop->ken : ''}}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Organizer') }}</label>
            <input type="text" class="form-control" name="syusai" value='{{ $workshop->syusai ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Co-sponsored') }}</label>
            <input type="text" class="form-control" name="kyousai" value='{{ $workshop->kyousai ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Supporters') }}</label>
            <input type="text" class="form-control" name="sien" value='{{ $workshop->sien ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Time') }}</label>
            <input type="text" class="form-control" name="nittei2" value='{{ $workshop->nittei2 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Reception start time') }}</label>
            <input type="text" class="form-control" name="nittei3" value='{{ $workshop->nittei3 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="news_date">{{ __('Workshop date') }}</label>
            <input type="text" class="js-flatpickr form-control bg-white" name="nittei1" id="example-flatpickr-default" placeholder="Y-m-d" value="{{ $workshop->nittei1 ?? '' }}">
        </div>
        <div class="form-group">
            <label for="status">{{ __('Timezone') }}</label>
            <select class="form-control" name="ampm">
                <option value="1" {{ $workshop->ampm == '1' ? 'selected':'' }}>Am</option>
                <option value="2" {{ $workshop->ampm == '2' ? 'selected':'' }}>Pm</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Venue name') }}</label>
            <input type="text" class="form-control" name="kaizyou1" value='{{ $workshop->kaizyou1 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Venue address') }}</label>
            <input type="text" class="form-control" name="kaizyou3" value='{{ $workshop->kaizyou3 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Venue tel') }}</label>
            <input type="text" class="form-control" name="kaizyou4" value='{{ $workshop->kaizyou4 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Venue HP address') }}</label>
            <input type="text" class="form-control" name="kaizyou2" value='{{ $workshop->kaizyou2 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Venue map URL') }}</label>
            <input type="text" class="form-control" name="tizu" value='{{ $workshop->tizu ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Capacity') }}</label>
            <input type="number" class="form-control" name="teiin" value='{{ $workshop->teiin ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Capacity1') }}</label>
            <input type="number" class="form-control" name="teiin2" value='{{ $workshop->teiin2 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Implementation Guidelines Release Date') }}</label>
            <input type="text" class="js-flatpickr form-control bg-white" placeholder="Y-m-d" name="zyk" value='{{ $workshop->zyk ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Start accepting application for attendance') }}</label>
            <input type="text" class="js-flatpickr form-control bg-white" placeholder="Y-m-d" name="uketuke1" value='{{ $workshop->uketuke1 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('End of application acceptance') }}</label>
            <input type="text" class="js-flatpickr form-control bg-white" placeholder="Y-m-d" name="uketuke2" value='{{ $workshop->uketuke1 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Application details correction / cancellation acceptance end date') }}</label>
            <input type="text" class="js-flatpickr form-control bg-white" placeholder="Y-m-d" name="mscu" value='{{ $workshop->mscu ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Implementation procedure Delete date') }}</label>
            <input type="text" class="js-flatpickr form-control bg-white" placeholder="Y-m-d" name="zys" value='{{ $workshop->zys ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Billed amount 1') }}</label>
            <input type="number" class="form-control" name="kingaku1" value='{{ $workshop->kingaku1 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Billed amount 2') }}</label>
            <input type="number" class="form-control" name="kingaku2" value='{{ $workshop->kingaku2 ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Transfer information') }}</label>
            <input type="text" class="form-control" name="khurikomi" value='{{ $workshop->khurikomi ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Transfer deadline') }}</label>
            <input type="text" class="js-flatpickr form-control bg-white" placeholder="Y-m-d" name="kigen" value='{{ $workshop->kigen ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Contact fax number') }}</label>
            <input type="text" class="form-control" name="kfax" value='{{ $workshop->kfax ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Email') }}</label>
            <input type="text" class="form-control" name="kemail" value='{{ $workshop->kemail ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Teacher name') }}</label>
            <input type="text" class="form-control" name="kousi" value='{{ $workshop->kousi ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Contents') }}</label>
            <input type="text" class="form-control" name="naiyou" value='{{ $workshop->naiyou ?? '' }}'>
        </div>
    </div>
</div>