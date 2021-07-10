@extends('layouts.base')

@section('header_inner')
    <div class="header_content bg_cover" style="background-image: url(assets/images/hero.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="content_wrapper">
                        <h3 class="title">HandMade saýta hoş geldiňiz!</h3>
                        <p>Elde ýasalan ähli zatlar, satyn al, öz döredijiligiňi bahalandyr, sen muňa mynasyp!</p>
                        <ul class="header_btn">
                            <li><a class="main-btn" href="{{ route('app.product.list') }}">Harytlara geç</a></li>
                            <li><a class="main-btn main-btn-2" href="post-ads.html">Täze haryt goş</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header_search">
                <form action="{{ route('app.product.list') }}">
                    <div class="search_wrapper d-flex flex-wrap">
                        <div class="search_column d-flex flex-wrap">
                            <div class="search_select mt-15">
                                <select name="location">
                                    <option value="0">Nirede?</option>
                                    @foreach(\App\Models\Location::parents()->get() as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                <i class="far fa-map-marker-alt"></i>
                            </div>
                            <div class="search_select mt-15">
                                <select name="category">
                                    <option value="0">Haýsy bölümde?</option>
                                    @foreach(\App\Models\Category::parents()->get() as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                <i class="far fa-tags"></i>
                            </div>
                        </div>
                        <div class="search_column d-flex flex-wrap">
                            <div class="search_form mt-15">
                                <input type="text" name="search" placeholder="Haýsy sözler bar?">
                                <i class="far fa-i-cursor"></i>
                            </div>
                            <div class="search_btn mt-15">
                                <button class="main-btn">Gözle!</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @foreach(\App\Models\Category::parents()->get() as $item)
        @if($item->products()->count() < 1) @continue @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="ads_tabs d-sm-flex align-items-end justify-content-between">
                    <div class=" mt-40">
                        <h4 class="title">{{ $item->title }}</h4>
                    </div>
                    <a  href="{{ route('app.product.list',['category' => $item->id]) }}" >Ählisi</a>
                </div>
            </div>
        </div>
        <div class="ads_tabs">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                <div class="row">
                    @foreach($item->products as $product)
                        @include('app.product._block', ['product' => $product])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
