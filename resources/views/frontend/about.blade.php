@extends('frontend.about-layout')
@section('jp_title') 協会紹介 @endsection
@section('title') About @endsection
@section('about-content')
<div class="container">
{!! htmlspecialchars_decode($body->description) !!}
</div>
@endsection