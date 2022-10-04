@extends('companybase::frontend.layouts.app')
@section('title','Chi tiết dịch vụ')

@section('main-content')
<div class="w3-content" style="max-width:1000px">
<header class="w3-container w3-center w3-padding-32">
        <br>
        <h2>{{$service->service_name}}</h2>
    </header>
    <table class="table">
        <thead>
            <tr>
                <th>Dịch vụ</th>
                <th>Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code class="w3-codespan">Gói</code></td>
                <td>{{$service->package}}</td>
            </tr>
            <tr>
                <td><code class="w3-codespan">Giá</code></td>
                <td>{{number_format($service->price) }} VNĐ</td>
            </tr>
            <tr>
                <td><code class="w3-codespan">Thời gian hiệu lực</code></td>
                <td>{{$service->effective_time}}</td>
            </tr>
            <tr>
                <td><code class="w3-codespan">Vị trí hiển thị ưu tiên/ Top Impression</code></td>
                <td>{{$service->display_position}}</td>
            </tr>
            <tr>
                <td><code class="w3-codespan">Đẩy top tự động hàng tuần/ Re-Top</code></td>
                <td>{{$service->re_top}}</td>
            </tr>
            <tr>
                <td><code class="w3-codespan">Thông báo việc làm/ Top Job Alert</code></td>
                <td>{{$service->job_alert}}</td>
            </tr>
            <tr>
                <td><code class="w3-codespan">Tính năng</code></td>
                <td>{{$service->feature}}</td>
            </tr>
            <tr>
                <td><code class="w3-codespan">Bảo hành vị trí ưu tiên/ Top Warranty</code></td>
                <td>{!! $service->warranty !!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
