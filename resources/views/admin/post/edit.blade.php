@extends('companybase::admin.layouts.master')
@section('title', 'Sửa bài viết')

@section('main-content')
    @include('companybase::admin.partials.content-header', [
        'router' => 'post.index',
        'name' => 'Post',
        'key' => 'Edit',
    ])
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class='card'>
                <div class="card-body table-responsive p-0">
                    <form method="post" action="{{ route('post.update', $post->id) }}" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group ">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tiêu đề</label>
                            <div class="col-sm-12">
                                <input class="form-control @error('title') is-invalid @enderror" type="text"
                                    value="{{ $post->title }}" id="example-text-input" name="title"
                                    placeholder="NHập Tiêu đề">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            @if (session('status'))
                                {{ session('status') }}
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile" class="col-sm-2 col-form-label">Nhập ảnh</label>
                            <div class="col-sm-12">
                                <input type="file" id="exampleInputFile" name="photo">
                            </div>
                            <div class="col-md-4 feature_image_container">
                                <div class="row">
                                    <img class="feature_image" src="{{ asset($post->photo) }}" alt=""
                                        style='width:250px;'>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Trích dẫn</label>
                            <div class="col-sm-12">
                                <textarea class="form-control @error('quote') is-invalid @enderror" id="quote" name="quote">{{ $post->quote }}</textarea>
                                @error('quote')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nội dung</label>
                            <div class="col-sm-12">
                                <textarea id="summernote" class="@error('content') is-invalid @enderror" name="content">
                                    {{ $post->content }}
                                </textarea>
                                @error('content')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nổi bật</label>
                            <div class="col-sm-12">
                                <input type="radio" name="is_featured" value="1"
                                    {{ $post->is_featured == '1' ? 'checked' : '' }}>có
                                <input type="radio" name="is_featured" value="0"
                                    {{ $post->is_featured == '0' ? 'checked' : '' }}>Không
                            </div>
                            @error('is_featured')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Thẻ</label>
                            <div class="col-sm-12">
                                <select class="form-control input-width" name="tag_id">
                                    <option disabled value="">Vui lòng chọn một</option>
                                    @foreach ($tags as $value)
                                        <option value="{{ $value->id }}"
                                            {{ $post->tag_id == $value->id ? 'selected' : '' }}>{{ $value->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('tag_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-4">
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option value="active" {{ $post->status == 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive" {{ $post->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <div class="col-sm-12">
                                <button class="btn btn-lg btn-primary">Sửa</button>
                                <button type="reset" class="btn btn-lg btn-danger">Hủy bỏ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
