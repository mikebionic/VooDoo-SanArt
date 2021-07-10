@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="sidebar_profile mt-50">
                @include('widgets.user._sidebar')
            </div>
        </div>
        <div class="col-lg-9">
            @yield('content_inner')
        </div>
    </div>
@endsection
