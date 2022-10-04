<!-- Introduction menu -->
<div class="w3-col l4">
    <!-- Posts -->
    <div class="w3-card w3-margin">
        <div class="w3-container w3-padding">
            <h4>Bài viết nổi bật</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
            @foreach ($featurePosts as $item)
            <a href="{{ asset('post-detail/' . $item->id . '/' . $item->slug) }}" style="text-decoration: none;">
                <li class="w3-padding-16">
                    <img src="{{ asset($item->photo) }}" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                    <span class="w3-large">{!! $item->title !!}</span><br>
                    <span>By {{ $item->user->name }}</span>
                </li>
            </a>
            @endforeach
        </ul>
    </div>
    <hr>

    <!-- Labels / tags -->
    <div class="w3-card w3-margin">
        <div class="w3-container w3-padding">
            <h4>Tags</h4>
        </div>
        <div class="w3-container w3-white">
            @foreach ($tags as $item)
            <a href="{{asset('post-tags/'.$item->id.'/'.$item->slug)}}">#<span class="">{{$item->name}}</span></a>
            @endforeach
        </div>
    </div>

    <!-- END Introduction Menu -->
</div>
