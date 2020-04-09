@extends('client.layouts.index')

@section('content')
    <x-titles.title title="title.posts.create"/>
    <form class="form-row" method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="col-6 mt-3">
            <x-ul.input label="posts.form.title" name="title" />
        </div>
        <div class="col-6 mt-3">
            <x-ul.input label="posts.form.slug" name="slug" />
        </div>
        <div class="col-12 mt-3">
            <x-ul.textarea label="posts.form.desc.short" name="desc_short" />
        </div>
        <div class="col-12 mt-3">
            <x-ul.textarea label="posts.form.desc.full" name="desc_full" />
        </div>
        <div class="col-9 mt-3">
            <x-ul.checkbox label="posts.form.publish" name="status" />
        </div>
        <div class="col mt-3">
            <x-ul.submit label="posts.form.post.create"/>
        </div>
    </form>
@endsection
