@extends('companybase::admin.layouts.master')
@section('title','Danh sách liên hệ')

@section('main-content')
<div class="content">
		<div class="row mb-5">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-12">
				<div class="card mb-3">
					<div class="card-header">
						<h3><i class="fa fa-telegram"></i>Danh sách liên hệ</h3>
					</div>

					<div class="card-body">
						<div class="table-responsive">
						<table id="example1" class="table table-bordered table-hover display">
							<thead>
								<tr>
									<th>ID</th>
									<th>người gửi</th>
									<th>Email</th>
									<th>Phone</th>
									<th style="text-align: center">Hiển thị</th>
									<th style="min-width: 4em;">Xóa</th>
								</tr>
							</thead>
							<tbody>
								@foreach($contacts as $key => $value)
								<tr>
									<td>{{++$key}}</td>
									<td>{{$value->name}}</td>
									<td>{{$value->email}}</td>
									<td>{{$value->phone}}</td>
									<td>
										<a  href="{{route('contact.show', $value->id)}}" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i> Hiện thị</a>
									</td>
									<td>
									<form method="POST" action="{{route('contact.destroy',$value->id)}}">
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
				</div><!-- end card-->
			</div>
		</div>
	</div>
@endsection
