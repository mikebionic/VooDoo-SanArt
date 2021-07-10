@extends('layouts.auth')

@section('content')
    <form action="{{ route('auth.login_check') }}" method="post">
        @csrf
        <input type="text" name="login">
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit">
    </form>
@endsection
