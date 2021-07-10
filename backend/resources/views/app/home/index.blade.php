@extends('layouts.base')

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
