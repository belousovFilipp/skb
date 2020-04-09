@extends('admin.layouts.app.index')
@section('body')
    @include('admin.components.navs.top')
    <div class="container-fluid">
        <div class="row">
            @include('admin.components.navs.left')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @yield('content')
            </main>
        </div>
    </div>
@endsection
