@extends('companybase::admin.layouts.master')
@section('title','Sửa thẻ')

@section('main-content')
@include('companybase::admin.partials.content-header', ['router' => 'tag.index', 'name' => 'Tag', 'key' => 'Edit'])
<div class="row">
	<div class="col-md-8 offset-md-2">
		<div class='box box-primary'>
			<form method="POST" action="{{route('tag.update', $tag->id)}}">
				@csrf
				@method('put')
				<div class="form-group ">
					<label class="col-sm-2 col-form-label">Tên</label>
					<div class="col-sm-10">
						<input type="text" name="name" value="{{$tag->name}}" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập Tag">
						@error('name')
						<span class="text-danger">{{$message}}</span>
						@enderror
					</div>
				</div>
				<div class="form-group ">
				<label class="col-sm-3 col-form-label">Trạng thái</label>
					<div class="col-sm-10">
						<select name="status" class="form-control">
							<option value="active" {{(($tag->status=='active') ? 'selected' : '')}}>Active</option>
                    		<option value="inactive" {{(($tag->status=='inactive') ? 'selected' : '')}}>Inactive</option>
						</select>
						@error('status')
						<span class="text-danger">{{$message}}</span>
						@enderror
					</div>
				</div>
				<div class="col-sm-10">
					<button class="btn btn-lg btn-primary">Sửa</button>
					<button type="reset" class="btn btn-lg btn-danger">Hủy bỏ</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
