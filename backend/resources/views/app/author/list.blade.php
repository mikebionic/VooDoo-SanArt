@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-15">
                    <h3 class="title">Iň Döredijilikli awtorlar</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($authors as $item)
                @include('app.author._block', ['author' => $item])
            @endforeach
        </div>
    </div>
@endsection
