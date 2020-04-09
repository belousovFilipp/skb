@extends('client.layouts.index')

@section('content')
    <x-titles.title title="title.home"/>
    <x-lists.posts :posts="$posts">
        @foreach($posts as $post)
            <x-cards.post :post="$post"/>
        @endforeach
    </x-lists.posts>
@endsection
