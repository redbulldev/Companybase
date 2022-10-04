@extends('companybase::frontend.layouts.app')
@section('title', 'Trang chủ')

@section('main-content')
    {{-- BÀI VIẾT --}}
    <div class="w3-content" style="max-width:1400px">
        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <br>
            <h1><b>BÀI VIẾT</b></h1>
            <p>Chào mừng bạn đến với website của chúng tôi</p>
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
            <div class="w3-col l4">
                <!-- Posts -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Bài viết nổi bật</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        @foreach ($posts as $item)
                            <a href="{{ asset('post-detail/' . $item->id . '/' . $item->slug) }}"
                                style="text-decoration: none;">
                                <li class="w3-padding-16">
                                    <img src="{{ asset($item->photo) }}" alt="Image" class="w3-left w3-margin-right"
                                        style="width:50px">
                                    <span class="w3-large">{!! $item->title !!}</span><br>
                                    <span>By {{ $item->user->name }}</span>
                                </li>
                            </a>
                        @endforeach
                    </ul>
                </div>
                <hr>

                <!-- Labels / tags -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Tags</h4>
                    </div>
                    <div class="w3-container w3-white">
                        @foreach ($tags as $item)
                            <a href="{{asset('post-tags/'.$item->id.'/'.$item->slug)}}">#<span class="">{{$item->name}}</span></a>
                        @endforeach
                    </div>
                </div>

                <!-- END Introduction Menu -->
            </div>

            <!-- END GRID -->
        </div><br>
    </div>


    <!-- Content DỊCH VỤ-->
    <div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

        <div class="w3-panel">
            <h1><b>DỊCH VỤ</b></h1>
        </div>

        <!-- Grid -->
        <div class="w3-row-padding" id="plans">
            <div class="w3-center w3-padding-64">
                <h3>Định giá các gói</h3>
                <p>Chọn gói giá phù hợp với nhu cầu của bạn.</p>
            </div>
            @foreach ($services as $item)
            <div class="w3-third w3-margin-bottom">
                <ul class="w3-ul w3-border w3-center w3-hover-shadow">
                    <li class="w3-black w3-xlarge w3-padding-32">{{$item->package}}</li>
                    <li class="w3-padding-16">{{$item->feature}}</li>
                    <li class="w3-padding-16">{{$item->effective_time}}</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">{{number_format($item->price)}} VNĐ</h2>
                        <span class="w3-opacity">Mỗi 2 tuần</span>
                    </li>
                    <a href="#">
                        <li class="w3-light-grey w3-padding-24">
                            <button class="w3-button w3-green w3-padding-large">Chi tiết</button>
                        </li>
                    </a>
                </ul>
            </div>
            @endforeach

        </div>

        <!-- Grid -->
        <div class="w3-row-padding" id="about">
            <div class="w3-center w3-padding-64">
                <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Khách hàng của chúng tôi</span>
            </div>

            @foreach ($users as $item)
                <div class="w3-third w3-margin-bottom">
                    <div class="w3-card-4">
                        @if (!isset($item->avatar->value))
                            <img src="{{ asset('admin/avatar.jpg') }}" alt="avatar" style="width:100%" />
                        @else
                            <img src="{{ $item->avatar->value }}" alt="John" style="width:100%">
                        @endif
                        <div class="w3-container">
                            <h3>{{ $item->name }}</h3>
                            <p class="w3-opacity">{{ $item->role }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Contact -->
        <div class="w3-center w3-padding-64" id="contact">
            <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Liên hệ chúng tôi</span>
        </div>

        <form class="w3-container" action="{{ route('contact.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="w3-section">
                <label>Tên</label>
                <input class="w3-input w3-border w3-hover-border-black @error('name') is-invalid @enderror"
                    style="width:100%;" type="text" name="name" placeholder="Nhập tên của bạn">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w3-section">
                <label>Email</label>
                <input class="w3-input w3-border w3-hover-border-black @error('email') is-invalid @enderror"
                    style="width:100%;" type="text" name="email" placeholder="Nhập email của bạn">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w3-section">
                <label>Điện thoại</label>
                <input class="w3-input w3-border w3-hover-border-black @error('phone') is-invalid @enderror"
                    style="width:100%;" name="phone" placeholder="Nhập số điện thoại của bạn">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w3-section">
                <label>Nội dung</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nhập nội dung cần gửi" name="message"></textarea>
                @error('message')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="w3-button w3-block w3-black">Gửi</button>
        </form>
    </div>
@endsection
