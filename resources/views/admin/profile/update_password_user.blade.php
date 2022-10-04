@extends('companybase::admin.layouts.master')
@section('title','Cập nhập mật khẩu')

@section('main-content')
<div class="content">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fa fa-user"></i> Cập Nhập Mật Khẩu</h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.change.password') }}">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-lg-9 col-xl-9">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nhập mật khẩu cũ </label>
                                                <input class="form-control @error('old_password') is-invalid @enderror" name="old_password" type="password" placeholder="Old Password" />
                                                @error('old_password')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nhập mật khẩu mới </label>
                                                <input class="form-control @error('new_password') is-invalid @enderror" name="new_password" type="password" placeholder="New Password" />
                                                @error('new_password')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Xác nhận mật khẩu mới </label>
                                                <input class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" placeholder="Password Confirmation" />
                                                @error('password_confirmation')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- end card-body -->
                </div><!-- end card-->
            </div>
        </div>
    </div>
    <!-- END container-fluid -->
</div>
@endsection
