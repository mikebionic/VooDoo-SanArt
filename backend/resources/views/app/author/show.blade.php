@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single_locations mt-30">
                    <div class="locations_image">
                        <img src="{{ asset($author->avatar_path) }}" alt="Locations">
                    </div>
                    <div class="locations_content">
                        <h5 class="title">
                            <a href="javascript:void(0)">
                                {{ $author->name }}
                            </a>
                        </h5>
                        <p>{{ $author->title ?? 'Suratçy' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">

                <div class="row justify-content-center">
                    <div class="section_title text-center pb-15">
                        <h3 class="title">Awtoryň harytlary</h3>
                    </div>
                </div>
                <div class="row">

                    @foreach($author->products as $item)
                        @include('app.product._block', ['product' => $item, 'col' => 'col-md-6 col-sm-12'])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
