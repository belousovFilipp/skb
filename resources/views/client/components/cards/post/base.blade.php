<article class="blog-post">
    <h2 class="blog-post-title">
        <a class="text-dark" href="{{route('posts.show',$post->slug)}}">{{$post->title}}</a>
    </h2>
    <p class="blog-post-meta">{{$post->date()}}<a class="ml-2" href="#">Mark</a></p>
    <p>{{$post->desc_short}}</p>
    <div class="text-right">
        <a class="text-dark" href="{{route('posts.show',$post->slug)}}">@lang('posts.more.details')</a>
    </div>
</article>

