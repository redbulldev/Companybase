@extends('companybase::admin.layouts.master')
@section('title','Danh sách thẻ')

@section('main-content')
<div class="row">
	<div class="col-md-12 box-header with-border">
    <div class='card'>
      <div class="card-header">
        <div class="card-tools">
          <a href="{{route('tag.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus-square"></i> Thêm mới</a>
        </div>
      </div>
      <div class="card-body table-responsive p-0">
        <div class="text-center">
          <b-spinner style="width: 3rem; height: 3rem;" label="Large Spinner Text Centered" variant="primary"></b-spinner>
        </div>
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>Stt</th>
                <th>Tên</th>
                <th>Trạng thái</th>
                <th colspan="3">Tùy chọn</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Stt</th>
                <th>Tên</th>
                <th>Trạng thái</th>
                <th colspan="3">Tùy chọn</th>
              </tr>
            </tfoot>
            <tbody>
              @foreach($tags as $key => $value)
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$value->name}}</td>
                <td>
                  @if($value->status=='active')
                  <span class="badge badge-success">{{$value->status}}</span>
                  @else
                  <span class="badge badge-warning">{{$value->status}}</span>
                  @endif
                </td>
                <td class="text-center">
                  <a href="{{route('tag.edit', $value->id)}}" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i> Sửa</a>
                </td>
                <td>
                  <form method="POST" action="{{route('tag.destroy',$value->id)}}">
                      @csrf
                      @method('delete')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
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
@endsection
