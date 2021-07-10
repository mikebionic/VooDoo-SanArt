@extends('layouts.base')

@section('content')
    @foreach(\App\Models\Category::parents()->get() as $item)
        <div class="row">
            <div class="col-lg-12">
                <div class="ads_tabs d-sm-flex align-items-end justify-content-between pb-30">
                    <div class="section_title mt-45">
                        <h3 class="title" style="font-size: 30px">{{ $item->title }}</h3>
                    </div>
                    <div class="tabs_menu mt-50">
                        <ul class="nav" id="myTab" role="tablist">
                            <li>
                                <a class="active" id="popular-tab" href="{{ route('app.product.list',['category' => $item->id]) }}"
                                   role="tab" aria-controls="popular" aria-selected="true">Show more</a>
                            </li>
                        </ul>
                    </div>
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
