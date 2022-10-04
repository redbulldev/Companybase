@extends('companybase::frontend.layouts.app')
@section('title','Liên hệ với chúng tôi')

@section('main-content')

    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64" id="contact">
        <h2 class="w3-wide w3-center">LIÊN HỆ</h2>
        <div class="w3-row w3-padding-32">
            <div class="w3-col m6 w3-large w3-margin-bottom">
                <i class="fa fa-map-marker" style="width:30px"></i>{{config('companybase.address')}}<br>
                <i class="fa fa-phone" style="width:30px"></i> Điện thoại: {{config('companybase.phone')}}<br>
                <i class="fa fa-envelope" style="width:30px"> </i> Email: {{config('companybase.email')}}<br>
            </div>
            <div class="w3-col m6">
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <br>
                        <input class="w3-input w3-border" type="text"placeholder="Nhập tên của bạn" name="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <br>
                        <input class="w3-input w3-border" type="text" placeholder="Nhập email của bạn" name="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <br>
                        <input class="w3-input w3-border" type="text" name="phone" placeholder="Nhập số điện thoại của bạn">
                        <br>
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        {{-- <input class="w3-input w3-border" type="text" placeholder="Message" name="message"> --}}
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nhập nội dung cần gửi" name="message"></textarea>
                        </div>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <button class="w3-button w3-black w3-section w3-right" type="submit">GỬI</button>
                </form>
            </div>
        </div>
    </div>
@endsection
