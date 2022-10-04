@extends('companybase::admin.layouts.master')
@section('title','Sửa cài đặt')

@section('main-content')
<div class="content">
    <div class="container-fluid">
        <div class="card-header">
            <h3></i>
                <a href="{{route('setting.create')}}" class="btn btn-warning"><i class="fa fa-plus" aria-hidden="true"></i> Thêm mới</a>
            </h3>
        </div>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3>
                            <i class="fa fa-book"></i>
                            Thông tin tiêu đề
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.setting') }}">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Tiêu đề</label>
                                        <input type="text" class="form-control" value="{{ $settings['header'] }}" placeholder="Nhập tiêu đề" required="" name="header">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nội dung</label>
                                        <textarea id="summernote" name="header-content">
                                            {!! $settings['header-content'] !!}
                                        </textarea>
                                    </div>
                                </div>

                                <!-- Lưu -->
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary float-right"><span class="btn-label"><i class="fa fa-save"></i></span> Lưu lại</button>
                                </div>
                                <!-- end lưu -->
                            </div> <!-- end row -->

                        </form>
                    </div> <!-- end card-body -->
                </div><!-- end card-->
            </div>
        </div>
        <!-- end row -->

        <div class="row mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fa fa-book"></i> Thông tin liên hệ</h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.setting') }}">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Email</label>
                                        <input type="email" class="form-control" value="{{ $settings['email'] }}" placeholder="Nhập email" required="" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Điện thoại</label>
                                        <input type="text" class="form-control" value="{{ $settings['phone'] }}" placeholder="Nhập số điện thoại" required="" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Địa chỉ</label>
                                        <input type="text" class="form-control" value="{{ $settings['address'] }}" placeholder="Nhập địa chỉ" required="" name="address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Fax</label>
                                        <input type="text" class="form-control" value="{{ $settings['fax'] }}" placeholder="Nhập fax" required="" name="fax">
                                    </div>
                                </div>
                                <!-- Lưu -->
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary float-right"><span class="btn-label"><i class="fa fa-save"></i></span> Lưu</button>
                                </div>
                                <!-- end lưu -->
                            </div> <!-- end row -->

                        </form>
                    </div> <!-- end card-body -->
                </div><!-- end card-->
            </div>
        </div>
        <!-- end row -->

        <div class="row mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fa fa-book"></i> Liên kết mạng xã hội</h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.setting') }}">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Facebook</label>
                                        <input type="text" class="form-control" value="{{ $settings['facebook'] }}" placeholder="Nhập địa chỉ facebook" required="" name="facebook">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Twitter</label>
                                        <input type="text" class="form-control" value="{{ $settings['twitter'] }}" placeholder="Nhập địa chỉ twitter" required="" name="twitter">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Instagram</label>
                                        <input type="text" class="form-control" value="{{ $settings['instagram'] }}" placeholder="Nhập địa chỉ instagram" required="" name="instagram">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Youtube</label>
                                        <input type="text" class="form-control" value="{{ $settings['youtube'] }}" placeholder="Nhập địa chỉ youtube" required="" name="youtube">
                                    </div>
                                </div>
                                <!-- Lưu -->
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary float-right"><span class="btn-label"><i class="fa fa-save"></i></span> Lưu lại</button>
                                </div>
                                <!-- end lưu -->
                            </div> <!-- end row -->

                        </form>
                    </div> <!-- end card-body -->
                </div><!-- end card-->
            </div>
        </div>
        <!-- end row -->

        <div class="row mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fa fa-book"></i> Thời gian làm việc</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.setting') }}">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Thời gian làm việc</label>
                                        <input type="text" class="form-control" value="{{ $settings['working-time'] }}" placeholder="Nhập working-time" required="" name="working-time">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-small mt-4"><span class="btn-label"><i class="fa fa-save"></i></span> Lưu lại</button>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div><!-- end card-->
            </div>
        </div>
        <!-- end row -->



        <div class="row mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fa fa-book"></i> Link trang web</h3>
                    </div>

                    <div class="card-footer">
                        <form method="POST" action="{{ route('admin.setting') }}">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Link trang web</label>
                                        <input type="text" class="form-control" value="{{ $settings['link'] }}" placeholder="Nhập link trang web" required="" name="link">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-small mt-4"><span class="btn-label"><i class="fa fa-save"></i></span> Lưu lại</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end card-->
            </div>
        </div>
        <!-- end row -->


    </div>
    <!-- END container-fluid -->
</div>
@endsection
