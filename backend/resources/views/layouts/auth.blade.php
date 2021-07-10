@extends('layouts.core')

@section('body')
    @include('widgets._form_errors')
    @include('widgets._flashes')
    @yield('content')
@endsection
