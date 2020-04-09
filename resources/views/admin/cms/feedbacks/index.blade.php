@extends('admin.layouts.index')
@section('content')
    <x-admin.titles.title title="Feedback list"/>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
        </tr>
        </thead>
        <tbody>
        @if($feedbacks->isNotEmpty())
            @foreach($feedbacks as $feedback)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$feedback->email}}</td>
                    <td>{{$feedback->message}}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center display-4" colspan="3">Not feedbacks</td>
            </tr>
        @endif
        </tbody>
    </table>
@endsection
