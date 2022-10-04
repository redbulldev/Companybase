@extends('companybase::admin.layouts.master')
@section('title','Danh sách bài viết')

@section('main-content')
    <div class="content">
        <div class="row mb-5">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-12 ">
                <div class='card mb-3'>
                    <div class="card-header">
                        <h3 class="card-title"> Danh sách bài viết</h3>
                        <div class="card-tools">
                            <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary"><i
                                    class="fa fa-plus-square"></i> Thêm mới</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-hover display">
                                <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Tiêu đề</th>
                                        <th>Tóm tắt</th>
                                        <th>Ảnh</th>
                                        <th>#Tag</th>
                                        <th>Trạng thái</th>
                                        <th colspan="3">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $key => $item)
                                        <tr>
                                            <th scope="row">{{ ++$key }}</th>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->quote }}</td>
                                            <td><img src="{{ asset($item->photo) }}" alt="Girl in a jacket" width="100" height="100"></td>
                                            <td>
                                                <span class="badge badge-info">{{$item->tag->name}}</span>
                                            </td>
                                            <td>
                                                @if ($item->status == 'active')
                                                    <span class="badge badge-success">{{ $item->status }}</span>
                                                @else
                                                    <span class="badge badge-warning">{{ $item->status }}</span>
                                                @endif
                                            </td>

                                            <td class="text-center">
                                                <a href="{{ route('post.edit', $item->id) }}" class="btn btn-warning"><i
                                                        class="fa fa-edit" aria-hidden="true"></i> Sửa</a>
                                            </td>
                                            <td>
                                                <form method="POST" action="{{ route('post.destroy', $item->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i
                                                            class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
