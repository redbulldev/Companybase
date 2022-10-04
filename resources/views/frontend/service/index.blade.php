@extends('companybase::frontend.layouts.app')
@section('title','Các dịch vụ')

@section('main-content')
<div class="w3-content" style="max-width:1400px">
    <!-- Header -->
    <header class="w3-container w3-center w3-padding-32">
        <br>
        <h1><b>DỊCH VỤ</b></h1>
        <p>Các dịch vụ cảu chúng tôi</p>
    </header>
    <!-- Grid -->
    <div class="w3-row">
        <!-- Blog entries -->
        <div class="w3-col l8 s12">
            <!-- Blog entry -->
            @foreach ($services as $item)
            <div class="w3-card-4 w3-margin w3-white">
                <br>
                <div class="w3-container">
                    <h3><b>{{ $item->service_name }}</b></h3>
                    <h5>By {{ $item->user->name }} <span class="w3-opacity">{{$item->created_at->format('d M, Y')}}</span></h5>
                </div>

                <div class="w3-container">
                    <p>{!! $item->package !!}</p>
                    <p>{!! $item->feature !!}</p>
                    <p>{!! $item->effective_time !!}</p>
                    <h2 class="w3-wide">{{number_format($item->price)}} VND</h2>
                    <p>{!! $item->display_position !!}</p>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                            <a href="{{ asset('service-detail/' . $item->id . '/' . $item->slug) }}">
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
