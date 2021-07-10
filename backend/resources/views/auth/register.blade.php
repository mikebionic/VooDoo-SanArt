@extends('layouts.auth')

@section('content')
    <form action="{{ route('auth.register') }}" method="post">
        @csrf
        <input type="text" name="name">
        <br>
        <input type="text" name="phone">
        <br>
        <input type="text" name="email">
        <br>
        <select name="location">
            @foreach(\App\Models\Location::query()->get() as $item)
                <option value="{{ $item->id }}">{{ $item->title }}</option>
            @endforeach
        </select>
        <br>
        <input type="password" name="password">
        <br>
        <input type="password" name="password_confirmation">
        <br>
        <input type="submit">
    </form>
@endsection
