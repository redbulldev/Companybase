@extends('companybase::frontend.layouts.app')
@section('title','Các bài viết')

@section('main-content')
<div class="w3-content" style="max-width:1400px">
    <!-- Header -->
    <header class="w3-container w3-center w3-padding-32">
        <br>
        <h1><b>BÀI VIẾT</b></h1>
        <p>Các bài viết cảu chúng tôi</p>
    </header>
    <!-- Grid -->
    <div class="w3-row">
        <!-- Blog entries -->
        <div class="w3-col l8 s12">
            <!-- Blog entry -->
            @foreach ($posts as $item)
            <div class="w3-card-4 w3-margin w3-white">
                <img src="{{ asset($item->photo) }}" alt="Nature" style="width:100%">
                <div class="w3-container">
                    <br>
                    <h3><b>{{ $item->title }}</b></h3>
                    <h5>Bởi {{ $item->user->name }} <small
                        class="w3-opacity">{{ $item->created_at->format('d M, Y') }}</small></h5>
                </div>

                <div class="w3-container">
                    <p>{!! $item->quote !!}</p>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                            <a href="{{ asset('post-detail/' . $item->id . '/' . $item->slug) }}">
                                <p><button class="w3-button w3-padding-large w3-white w3-border"><b>ĐỌC THÊM
                                            &raquo;</b></button></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
            <!-- END BLOG ENTRIES -->
        </div>



        <!-- Introduction menu -->
        @include('companybase::frontend.layouts.aside')
        <!-- END Introduction Menu -->

        <!-- END GRID -->
    </div><br>
</div>
@endsection
