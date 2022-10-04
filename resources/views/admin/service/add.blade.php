@extends('companybase::admin.layouts.master')
@section('title', 'Thêm mới dịch vụ')

@section('main-content')
    @include('companybase::admin.partials.content-header', [
        'router' => 'service.index',
        'name' => 'Service',
        'key' => 'Create',
    ])
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class='card'>
                <div class="card-body table-responsive p-0">
                    <form method="post" action="{{ route('service.store') }}" class="form-horizontal">
                        @csrf
                        @method('POST')
                        <div class="form-group ">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tên dịch vụ</label>
                            <div class="col-sm-12">
                                <input class="form-control @error('service_name') is-invalid @enderror" type="text"
                                    value="{{ old('service_name') }}" id="example-text-input" name="service_name"
                                    placeholder="Nhập tên dịch vụ">
                                @error('service_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Gói dịch vụ</label>
                            <div class="col-sm-12">
                                <input class="form-control @error('package') is-invalid @enderror" type="text"
                                    value="{{ old('package') }}" id="example-text-input" name="package"
                                    placeholder="Nhập gói dịch vụ">
                                @error('package')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Giá dịch vụ</label>
                            <div class="col-sm-12">
                                <input class="form-control @error('price') is-invalid @enderror" type="text"
                                    value="{{ old('price') }}" id="example-text-input" name="price"
                                    placeholder="Nhập giá dịch vụ">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Thời gian hiệu lực</label>
                            <div class="col-sm-12">
                                <input class="form-control @error('effective_time') is-invalid @enderror" type="text"
                                    value="{{ old('effective_time') }}" id="example-text-input" name="effective_time"
                                    placeholder="Nhập thời gian hiệu lực">
                                @error('effective_time')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Vị trí hiển thị ưu tiên</label>
                            <div class="col-sm-12">
                                <input class="form-control @error('display_position') is-invalid @enderror" type="text"
                                    value="{{ old('display_position') }}" id="example-text-input" name="display_position"
                                    placeholder="Nhập vị trí hiển thị ưu tiên">
                                @error('display_position')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Đẩy top tự động hàng
                                tuần</label>
                            <div class="col-sm-12">
                                <input class="form-control @error('re_top') is-invalid @enderror" type="text"
                                    value="{{ old('re_top') }}" id="example-text-input" name="re_top"
                                    placeholder="Nhập đẩy top tự động hàng tuần">
                                @error('re_top')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Thông báo việc làm</label>
                            <div class="col-sm-12">
                                <input class="form-control @error('job_alert') is-invalid @enderror" type="text"
                                    value="{{ old('job_alert') }}" id="example-text-input" name="job_alert"
                                    placeholder="Nhập thông báo việc làm">
                                @error('job_alert')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tính năng</label>
                            <div class="col-sm-12">
                                <input class="form-control @error('feature') is-invalid @enderror" type="text"
                                    value="{{ old('feature') }}" id="example-text-input" name="feature"
                                    placeholder="Nhập tính năng">
                                @error('feature')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Bảo hành</label>
                            <div class="col-sm-12">
                                <textarea id="summernote" class="@error('warranty') is-invalid @enderror" name="warranty">
                                    {{ old('warranty') }}
                                </textarea>
                                @error('warranty')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-4">
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <div class="col-sm-12">
                                <button class="btn btn-lg btn-primary">Thêm</button>
                                <button type="reset" class="btn btn-lg btn-danger">Hủy bỏ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
