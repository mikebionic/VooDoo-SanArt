@extends('layouts.core')

@section('stylesheets')
    @parent
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('javascripts')
    @parent
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.7.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/ajax-contact.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>
@endsection

@section('body')
    @include('widgets._header')

    <section class="">
        <div class="container">
            <div class="mt-100">
                @include('widgets._form_errors')
                @include('widgets._flashes')
            </div>
            @yield('content')
        </div>
    </section>
    @include('widgets._footer')
@endsection
