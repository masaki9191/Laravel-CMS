<div class="row">

    <div class="col-md-10 offset-md-1">
        <h4 class="section-title">What's New</h4>
        <p class="sub-title">新着情報／活動報告</p>
        <p class="divider"></p>
        <ul class="whats-new">
            @foreach($records as $record)
            <li>
                <div class="date">{{ $record->jp_date }}</div>
                <div class="detail">{!! $record->title !!}</div>
            </li>
            @endforeach
        </ul>

    </div>
   <a href="#" class="btn btn-primary">一覧を見る<i class="fa fa-chevron-right"></i></a>
</div>
