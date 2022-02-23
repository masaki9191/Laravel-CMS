@extends('frontend.about-layout')
@section('jp_title') 役員紹介 @endsection
@section('title') Directors & Officers @endsection
@section('about-content')
<div class="container list-content">
@include('frontend.directors-and-officers-list')
</div>
@endsection