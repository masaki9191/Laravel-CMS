<div class='row'>
    <div class='col-md-10'>
        <div class="form-group">
            <label for="title">{{ __('Student name') }}</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name1" value='{{ ($registration) ? $registration->name1 : '' }}'>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name2" value='{{ ($registration) ? $registration->name2 : '' }}'>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Student name Furigana') }}</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="kana1" value='{{ ($registration) ? $registration->kana1 : '' }}'>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="kana2" value='{{ ($registration) ? $registration->kana2 : '' }}'>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div>
                <label for="title">{{ __('Gender') }}</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="example-radios-inline1" name="sex" value="1" {{ $registration->sex == 1 ? 'checked':'' }}>
                <label class="form-check-label" for="example-radios-inline1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="example-radios-inline1" name="sex" value="2" {{ $registration->sex == 2 ? 'checked':'' }}>
                <label class="form-check-label" for="example-radios-inline1">Women</label>
            </div>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Home zip code') }}</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="post1" value='{{ ($registration) ? $registration->post1 : '' }}'>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="post2" value='{{ ($registration) ? $registration->post2 : '' }}'>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Home Address') }}</label>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-control" name="address1">
                        <option value="1" {{ $registration->address1 == '1' ? 'selected':'' }}>Address1</option>
                        <option value="2" {{ $registration->address1 == '2' ? 'selected':'' }}>Address2</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="address2" value='{{ ($registration) ? $registration->address2 : '' }}'>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Member classification (number)') }}</label>
            <input type="number" class="form-control" name="member" value='{{ ($registration) ? $registration->member : ''}}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Company name') }}</label>
            <input type="text" class="form-control" name="cname" value='{{ $registration->cname ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Office name') }}</label>
            <input type="text" class="form-control" name="ceigyou" value='{{ $registration->ceigyou ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Work zip code') }}</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="cpost1" value='{{ ($registration) ? $registration->cpost1 : '' }}'>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="cpost2" value='{{ ($registration) ? $registration->cpost2 : '' }}'>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="title">{{ __('work address') }}</label>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-control" name="caddress1">
                        <option value="1" {{ $registration->caddress1 == '1' ? 'selected':'' }}>Address1</option>
                        <option value="2" {{ $registration->caddress1 == '2' ? 'selected':'' }}>Address2</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="caddress2" value='{{ ($registration) ? $registration->caddress2 : '' }}'>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="title">{{ __('Email') }}</label>
            <input type="text" class="form-control" name="mail" value='{{ $registration->mail ?? '' }}'>
        </div>

        <div class="form-group">
            <label for="title">{{ __('TEL') }}</label>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="tel1" value='{{ ($registration) ? $registration->tel1 : '' }}'>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="tel2" value='{{ ($registration) ? $registration->tel2: '' }}'>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="tel3" value='{{ ($registration) ? $registration->tel3 : '' }}'>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="title">{{ __('FAX') }}</label>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="fax1" value='{{ ($registration) ? $registration->fax1 : '' }}'>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="fax2" value='{{ ($registration) ? $registration->fax2: '' }}'>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="fax3" value='{{ ($registration) ? $registration->fax3 : '' }}'>
                </div>
            </div>
        </div>
    </div>
</div>