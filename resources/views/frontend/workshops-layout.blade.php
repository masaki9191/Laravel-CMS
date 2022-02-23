@extends('layouts.frontend')
@section('css_after')
<style>
    .headingdatafont {
        font: normal normal 600 30px/54px Source Han Serif;
        font-size: 30px;
    }

    .textdatafont {
        font: normal normal 600 18px/36px Source Han Serif;
        font-size: 18px;
    }

    .tadheadingdata {
        font: normal normal bold 18px/31px Source Han Sans JP;
        font-size: 18px;
    }

    .textparagraph {
        font: normal normal normal 16px/31px Source Han Sans JP;
        font-size: 16px;
    }

    .headingtextdata {
        font: normal normal bold 24px/36px Source Han Sans JP;
        font-size: 24px !important;
    }

    .smallheading {
        font: normal normal bold 20px/36px Source Han Sans JP;
        font-size: 20px !important;
    }

    .paratext {
        font: normal normal normal 18px/31px Source Han Sans JP;
        font-size: 18px !important;
    }

    .twentyfont {
        font: normal normal bold 20px/36px Source Han Sans JP;
        font-size: 20px !important;
    }

    .downloaddatatext {
        font: normal normal bold 14px/21px Source Han Sans JP;
        font-size: 14px !important;
    }

    .datetextfont {
        font: normal normal normal 16px/24px Source Han Sans JP;
        font-size: 16px !important;
    }
    .fivedivdata
    {
        width:20%;
    }
    .linkfont
    {
        font: normal normal bold 20px/24px Source Han Sans JP;
    }
    @media screen and (max-width: 764px) and (min-width:340px){

        .threedivdata
        {
            margin-left: -7px;
            margin-right: 1px;
        }
    }
    .rightbluediv
    {
        background:#0095FF;
        right: 16px;
        top: 20px;
        color:#fff;
        position:absolute
    }

    @media screen and (max-width: 764px) and (min-width:340px){
        .rightbluediv{
            position: relative;
            width: 50%;
            left: 23px;
        }
    }
    .modalpara
    {
        font-size:12px !important;
    }

    #modalcrossbtn
    {
        background: #0B9AA3;
        color: white;
        border-radius: 64px;
        padding-left: 8px;
        padding-top: 4px;
        padding-right: 9px;
        padding-bottom: 4px;
        right: 10px;
        position: absolute;
        top: 0px;
        opacity: 23.5;
    }

    #exampleModalLabel
    {
        position:relative;
    }

    @media screen and (max-width:464px) and (min-width:340px){
        .modalbtnfooter{
            padding:3px;
        }

    }


    @media screen and (max-width: 764px) and (min-width:340px){

        .yellowbtn
        {
            margin-top: 20px;

        }

    }

</style>
@endsection
@section('content')
<div class="page-body">
    <section id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>@yield('jp_title')</h2>
                    <p>@yield('title')</p>
                    <div class="divider"></div>
                </div>
            </div>
        </div>
        <div class="navigation">
            <div class="container">
                <div class="">
                    <div class="">
                        <ul>
                            <li class="{{ request()->is('continousWorkshop/*') ? 'active':'' }}"><a href="{{ route('frontend.workshop.outline') }}">継続的研修</a></li>
                            <li class="{{ request()->is('othersWorkshop/*') ? 'active':'' }}"><a href="{{ route('frontend.other.workshop.outline') }}">その他研修会</a></li>
                            <li  class="{{ request()->is('seminar/*') ? 'active':'' }}"><a href="{{ route('frontend.seminar.outline') }}">セミナー</a></li>
                            <li class="{{ request()->is('cdr') ? 'active':'' }}"><a href="{{ route('frontend.workshop.cdr') }}">CDR</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('page-content')
</div>

@endsection

@section('js_after')
<script>
    $(function () {
        $('body').on('click', '.content-filter', function () {
            console.log("hello");
            var url = $(this).data('url');
            $.ajax({
                type: 'GET',
                url: url,
                success: function (response) {
                    $('#page-body').html(response);
                }
            });
        });
    });
</script>
@endsection