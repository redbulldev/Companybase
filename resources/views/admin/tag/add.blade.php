@extends('companybase::admin.layouts.master')
@section('title','Thêm thẻ')

@section('main-content')
@include('companybase::admin.partials.content-header', ['router' => 'tag.index', 'name' => 'Tag', 'key' => 'Create'])
<section class="content">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class='box box-primary'>
				<div class='box-header with-border'>
				</div>
				<form action="{{route('tag.store')}}" method="POST">
					@csrf
					@method('POST')
					<div class="form-group ">
						<label class="col-sm-2 col-form-label">Tên</label>
						<div class="col-sm-10">
							<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập Tag"  value="{{old('name')}}">
							@error('name')
							<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
					</div>
					<div class="form-group ">
					<label class="col-sm-3 col-form-label">Trạng thái</label>
						<div class="col-sm-10">
							<select name="status" class="form-control" >
								<option value="active" >active</option>
								<option value="inactive">inactive</option>
							</select>
							@error('status')
							<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
					</div>
					<div class="col-sm-10">
						<button class="btn btn-lg btn-primary">Thêm</button>
						<button type="reset" class="btn btn-lg btn-danger">Hủy bỏ</button>
					</div>
				</form>
			</div>
		</div>
	</div>
 </section>
@endsection
