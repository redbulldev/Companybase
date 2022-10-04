@extends('companybase::admin.layouts.master')
@section('title','Trang quản trị')

@section('main-content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{\Companybase\Models\Admin::countUser()}}</h3>
                    <p>Tài khoản</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fa fa-user"></i>
                </div>
                <a href="{{route('user.index')}}" class="small-box-footer">Thêm thông tin <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{\Companybase\Models\Tag::countTag()}}<sup style="font-size: 20px"></sup></h3>
                    <p>Thẻ</p></p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-tags"></i>
                </div>
                <a href="{{route('tag.index')}}" class="small-box-footer">Thêm thông tin <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{\Companypost\Models\Post::countPost()}}</h3>
                    <p>Bài viết</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-book"></i>
                </div>
                <a href="{{route('post.index')}}" class="small-box-footer">Thêm thông tin <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{\Companybase\Models\Contact::countContact()}}</h3>
                    <p>Liên hệ</p>
                </div>
                <div class="icon">
                    <i class="far fa-comment-dots"></i>
                </div>
                <a href="{{route('contact.index')}}" class="small-box-footer">Thêm thông tin <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
</div>
@endsection
