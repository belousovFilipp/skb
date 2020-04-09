@extends('client.layouts.index')

@section('content')
    <x-titles.title title="title.contacts"/>
    <form class="form-row" method="POST" action="{{route('feedbacks.store')}}">
        @csrf
        <div class="col-12 mt-3">
            <x-ul.input label="contacts.email" name="email"/>
        </div>
        <div class="col-12 mt-3">
            <x-ul.textarea label="contacts.message" name="message"/>
        </div>
        <div class="col mt-3">
            <x-ul.submit label="contacts.send"/>
        </div>
    </form>
@endsection
