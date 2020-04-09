@extends('client.layouts.index')

@section('content')
    <x-titles.title title="title.posts.create"/>
    <div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="blog-post-meta">{{$post->date()}}<a class="ml-2" href="#">Mark</a></p>
        <p>{{$post->desc_full}}</p>
        <div class="text-right">
            <a class="text-dark" href="{{route('home')}}">@lang('posts.back')</a>
        </div>
    </div>
@endsection
