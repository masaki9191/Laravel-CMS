
<table class="js-table-checkable table table-responsive table-hover table-vcenter js-dataTable-buttons">
    <thead>
        <tr>
            <th class="text-center" style="width: 70px;">
                <div class="custom-control custom-checkbox d-inline-block">
                    <input type="checkbox" class="custom-control-input" id="check-all" name="check-all">
                    <label class="custom-control-label" for="check-all"></label>
                </div>
            </th>
            <th style="width: 10%">{{ __('請求メール') }}</th>
            <th>{{ __('請求金額') }}</th>
            <th>{{ __('入金確認') }}</th>
            <th>{{ __('受講票確認') }}</th>
            <th>{{ __('受講確認') }}</th>
            <th>{{ __('受付番号') }}</th>
            <th>{{ __('受講者氏名') }}</th>
            <th>{{ __('受講者氏名ふりがな') }}</th>
            <th>{{ __('性別') }}</th>
            <!--<th>{{ __('自宅郵便番号') }}</th>-->
            <th>{{ __('自宅住所') }}</th>
            <th>{{ __('会員区分') }}</th>
            <th>{{ __('会社名') }}</th>
            <th>{{ __('営業所名') }}</th>
            <th>{{ __('勤務先郵便番号') }}</th>
            <th>{{ __('勤務先 住所') }}</th>
            <th>{{ __('メールアドレス') }}</th>
            <th>{{ __('電話番号') }}</th>
            <th>{{ __('FAX番号') }}</th>
            <th>{{ __('届出の種類') }}</th>
            <th>{{ __('基礎講習受講機関') }}</th>
            <th>{{ __('申込者の状態') }}</th>
            <th>{{ __('登録枠') }}</th>
            <th>{{ __('登録日	') }}</th>
            <th>{{ __('最終更新日') }}</th>
            <th>{{ __('Actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registrations as $key=>$registration)
        <tr>
            <td class="text-center">
                <div class="custom-control custom-checkbox d-inline-block">
                    <input type="checkbox" value="{{ $registration->id }}" class="custom-control-input" id="row_{{$key}}" name="row[]">
                    <label class="custom-control-label" for="row_{{$key}}"></label>
                </div>
            </td>
            <td style="width: 10%">{{ $registration->smail_text }}</td>
            <td>{{ number_format($registration->seikyuu_kingaku) }}</td>
            <td>
                @if($registration->nyuukin_date)
                {{ $registration->nyuukin_date }}
                @else
                <button type="button" class="btn btn-primary update-status" data-status="6" data-url="{{ route('workshopRegistration.statusUpdate',6) }}" data-id="{{$registration->id}}">Attendance</button>
                @endif
            </td>
            <td>{{ $registration->zyukouhyou_date }}</td>
            <td>
                @if($registration->zyukou_date)
                {{ $registration->zyukou_date }}
                @else
                <button type="button" class="btn btn-primary update-status" data-status="2" data-url="{{ route('workshopRegistration.statusUpdate',2) }}" data-id="{{$registration->id}}">Payment</button>
                @endif
            </td>
            <td>{{ $registration->no }}</td>
            <td>{{ $registration->full_name }}</td>
            <td>{{ $registration->full_kana }}</td>
            <td>{{ $registration->gender }}</td>
            <td>{{ $registration->home_address }}</td>
            <td>{!! $registration->member_text !!}</td>
            <td>{{ $registration->cname }}</td>
            <td>{{ $registration->ceigyou }}</td>
            <td>{{ $registration->cpost1 }} - {{ $registration->cpost2}}</td>
            <td>{{ $registration->caddress1 }} - {{ $registration->caddress2}}</td>
            <td>{{ $registration->mail}}</td>
            <td>{{ $registration->tel1}}-{{ $registration->tel2}}-{{ $registration->tel3}}</td>
            <td>{{ $registration->fax1}}-{{ $registration->fax2}}-{{ $registration->fax3}}</td>
            <td>{{ $registration->notification_text}}</td>
            <td>{{ $registration->agency_text}}</td>
            <td>{{ $registration->status_text}}</td>
            <td>{{ $registration->touroku_text}}</td>
            <td>
                {!! $registration->kousin_date !!}
            </td>
            <td>
                {!! $registration->touroku_date !!}
            </td>
            <td>
                <a href="{{ route('workshopRegistration.edit',$registration->id) }}" class="btn btn-primary">Edit</a>
                <a href="javascript:void(0)"  data-toggle="modal" data-target="#delete-modal" class="btn btn-primary open-delete-popup" data-url="{{ route('workshopRegistration.destroy',$registration->id) }}"> Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>