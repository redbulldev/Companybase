<div class="w3-top">
    <div class="w3-row w3-large w3-light-grey">
        <div class="w3-col s1">
            <a href="{{route('home')}}" class="w3-button w3-block">Home</a>
        </div>
        <div class="w3-col s3">
            <a href="{{route('posts')}}" class="w3-button w3-block">Bài viết</a>
        </div>
        <div class="w3-col s3">
            <a href="{{route('services')}}" class="w3-button w3-block">Dịch vụ</a>
        </div>
        <div class="w3-col s3">
            <a href="{{asset('contact')}}" class="w3-button w3-block">Liên hệ</a>
        </div>
        <div class="w3-col s2">
            @if (!empty(Auth::user()->name))
            <a href="{{route('admin.home')}}" class="w3-button w3-block btn btn-info"> {{Auth::user()->name}}</a>
            @else
            <a href="{{route('login')}}" class="w3-button w3-block">Đăng nhập</a>
            @endif
        </div>
    </div>
</div>
