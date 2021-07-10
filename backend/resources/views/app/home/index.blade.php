@extends('layouts.base')

@section('content')
    @auth()
        <h1>Hello {{ auth()->user()->name }}</h1>
        <form action="{{route('auth.logout')}}" method="post">
            @csrf
            <input type="submit" value="Logout">
        </form>
    @else()
        <a href="{{ route('auth.login') }}">Login</a>
    @endauth
@endsection
