@extends('companybase::admin.layouts.master')
@section('title','Hiển thị liên hệ')

@section('main-content')
<div class="card-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-7 order-2 order-md-1">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Tên</span>
                            <span class="info-box-number text-center text-muted mb-0">{{$contact->name}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Email</span>
                            <span class="info-box-number text-center text-muted mb-0">{{$contact->email}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Số điện thoại</span>
                            <span class="info-box-number text-center text-muted mb-0">{{$contact->phone}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-5 order-1 order-md-2">
            <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Nội dung</h3>
            <p class="text-muted">{{$contact->message}}.</p>
            <br>
        </div>

    </div>
</div>
@endsection
