@extends('companybase::frontend.layouts.app')
@section('title','Chi tiết bài viết')

@section('main-content')
<div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min" id="us">
    <div class="w3-content">
        <h1 class="w3-center w3-text-grey"><b>{{ $post->title }}</b></h1>
        <img class="w3-round w3-grayscale-min" src="{{ asset($post->photo) }}" style="width:100%;margin:32px 0">
        <p>
            <i>{!! $post->content !!} .</i>
        </p><br>
        <p class="w3-center">
            <a href="#{{$post->user->name}}" class="w3-button w3-black w3-round w3-padding-large w3-large">
                By {{ $post->user->name }}
            </a>
        </p>
    </div>
</div>
@endsection
