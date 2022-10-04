@extends('companybase::admin.layouts.master')
@section('title','Hồ sơ của bạn')

@section('main-content')
<div class="content">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fa fa-user"></i> Trang cá nhân
                            <a href="{{ route('admin.change.password') }}" class="btn btn-success btn-sm float-right">Thay đổi mật khẩu</a>
                        </h3>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9 col-xl-9">
                                <form method="post" action="{{ route('admin.change.info', $profile->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Tên</label>
                                                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ $profile->name }}" />
                                            </div>
                                            @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $profile->email }}" />
                                            </div>
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-8">
                                            <button type="submit" class="btn btn-primary">Change Info</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-3 col-xl-3 border-left">
                                <form method="post" action="{{route('admin.change.avatar', $profile->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <b>Lần hoạt động cuối</b>: Đang cập nhật
                                    <br />
                                    {{-- <b>Ngày đăng ký </b>:
                                    <br /> --}}
                                    <div class="m-b-10"></div>

                                    <div id="avatar_image">
                                        @if(!isset($profile->avatar->value))
                                        <img src="{{asset('admin/avatar.jpg') }}" alt="avatar" style="max-width: 100px; height: auto;" />
                                        @else
                                        <img src="{{ asset($profile->avatar->value) }}" alt="avatar" style="max-width: 100px; height: auto;" />
                                        @endif
                                        <br />
                                    </div>
                                    <div id="image_deleted_text"></div>

                                    <div class="m-b-10"></div>

                                    <div class="form-group">
                                        <label>Thay đổi ảnh đại diện</label>
                                        <input type="file" name="avatar" class="form-control">
                                        @error('avatar')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-primary">Thay đổi ảnh đại diện</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div><!-- end card-->
            </div>
        </div>
    </div>
    <!-- END container-fluid -->
</div>
@endsection
