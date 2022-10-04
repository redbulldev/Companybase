@extends('companybase::admin.layouts.master')
@section('title','Danh sách tài khoản')

@section('main-content')
<div class="content" v-else>
	<div class="row mb-5">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-12">
			<div class="card mb-3">
				<div class="card-header">
					<h3>
						<i class="fa fa-table"></i> Danh sách tài khoản
						<a href="{{route('register')}}" class="btn btn-primary btn-sm float-right">Thêm Tài Khoản</a>
					</h3>
				</div>

				<div class="card-body">
					<div class="table-responsive">
					<table id="example1" class="table table-bordered table-hover display">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Create At</th>
								<th style="min-width: 4em;">Xóa</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $key => $value)
							<tr>
								<td>{{++$key}}</td>
								<td>{{$value->name}}</td>
								<td>{{$value->email}}</td>
								<td>{{$value->created_at}}</td>
								<td>
								@if($value->name !== 'admin')
								<form method="POST" action="{{route('user.destroy',$value->id)}}" >
									@csrf
									@method('delete')
									<button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
								</form>
 								@endif
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
