@extends('layouts.frontend')

@section('content')
<!-- HERO SECTION -->
<?php $a = "background-image: url(https://ununsplash.imgix.net/photo-1416339134316-0e91dc9ded92?q=75&fm=jpg&s=883a422e10fc4149893984019f63c818)"; ?>



<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach ($slides as $key=>$slide)
        <div id="bs-carousel-{{$key}}" class="carousel-item slides {{ $key == 0 ? "active":"" }}">
            <!--<div class="slide-{{ $key+1 }}" style="background-image:url(http://test-jahid.com/front-pages/images/slide1.png)"></div>-->
			 <div class="slide-{{ $key+1 }}" style="background-image:url({{$slide->model['0']->media_url}})"></div> 
            <div class="hero">
                <hgroup>
                    <h1>{{ $slide->title }}</h1>
                    <h3>{{ $slide->sub_title }}</h3>
                </hgroup>
            </div>
        </div>
        @endforeach
    </div>
</div>
@if($emrgencyText)
<section id="hero" style="margin-top:0px">

    <div class="opt-bar">
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <ul>

                        <li class="active opt-fix"><a href="#">{{ $emrgencyText->title }}</a></li>
                        <li class="opt-date"><a href="#">{{ $emrgencyText->management_date }}</a></li>
                        <li class="opt-text"><a href="#">{!!$emrgencyText->description!!}</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- WHATS NEW SECTION -->
<section id="whats-new">
    <div class="container list-content">
        @include('frontend.whats-new')
    </div>
</section>

<!-- TOPICS SECTION START-->
<section id="topics">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="section-title">Topics</h4>
                <p class="sub-title">JAHID からのお知らせ</p>
                <p class="divider"></p>

                <div class="topics">
                    @foreach($topics as $topic)
                    <div class="topic">
                        <div>
                            <div class="title">{{ $topic->title }}</div>
                            <div class="desc">{!! $topic->description !!}</div>
                        </div>
                        <a href="{{ $topic->url }}" target="_blank" class="btn btn-primary btn-square">{{ $topic->button_text }} <i class="fa fa-chevron-right"></i></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT SECTION START -->
<!-- <section id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3 contact">
                        <h4 class="section-title">CONTACT</h4>
                        <p class="divider"></p>
                        <p>ID･パスワードをお忘れの方は事務局までお問い合わせお願いします。</p>
                        <a href="#" class="btn btn-primary">メールでお問い合わせ <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section> -->
@endsection