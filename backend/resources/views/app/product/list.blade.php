@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="product_sidebar pt-20">
                <div class="sidebar_categories mt-30">
                    <div class="sidebar_title">
                        <h5 class="title">Bölümler</h5>
                    </div>
                    <div class="sidebar_categories_content">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="categorycard-0">
                                    <a href="{{ request()->fullUrlWithQuery(['category' => null]) }}" class="@if(request()->get('category') == '')text-primary @endif">
                                        <i class="fa fa-angle-right"></i> Ählisi
                                    </a>
                                </div>
                            </div>
                            @foreach(\App\Models\Category::parents()->get() as $item)
                                <div class="card">
                                    <div class="card-header" id="categorycard-{{ $item->id }}">
                                        <a href="{{ count($item->children) > 0 ? '#' : request()->fullUrlWithQuery(['category' => $item->id]) }}" class="@if(request()->get('category') == $item->id)text-primary @endif collapsed" @if(count($item->children) > 0)
                                        data-toggle="collapse"
                                           data-target="#categorycard-collape-{{ $item->id }}"
                                           aria-expanded="false"
                                           aria-controls="categorycard-collape-{{ $item->id }}" @endif>
                                            <i class="fa fa-angle-right "></i> {{ $item->title }}
                                        </a>
                                    </div>
                                    <div id="categorycard-collape-{{ $item->id }}" class="collapse  @if(in_array(request()->get('category'), $item->children->pluck('id')->toArray()))show @endif" aria-labelledby="categorycard-{{ $item->id }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                @foreach($item->children as $subItem)
                                                    <li><a class="@if(request()->get('category') == $subItem->id)text-primary @endif" href="{{ request()->fullUrlWithQuery(['category' => $subItem->id]) }}">{{ $subItem->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="sidebar_categories mt-30">
                    <div class="sidebar_title">
                        <h5 class="title">Ýeri</h5>
                    </div>
                    <div class="sidebar_categories_content">
                        <div class="accordion" id="locationAccordion">
                            <div class="card">
                                <div class="card-header" id="locationcard-0">
                                    <a href="{{ request()->fullUrlWithQuery(['location' => null]) }}" class="@if(request()->get('location') == '')text-primary @endif">
                                        <i class="fa fa-angle-right"></i> Ählisi
                                    </a>
                                </div>
                            </div>
                            @foreach(\App\Models\Location::parents()->get() as $item)
                                <div class="card">
                                    <div class="card-header" id="locationcard-{{ $item->id }}">
                                        <a href="{{ count($item->children) > 0 ? '#' : request()->fullUrlWithQuery(['location' => $item->id]) }}" class="@if(request()->get('location') == $item->id)text-primary @endif collapsed" @if(count($item->children) > 0)
                                        data-toggle="collapse"
                                           data-target="#locationcard-collape-{{ $item->id }}"
                                           aria-expanded="false"
                                           aria-controls="locationcard-collape-{{ $item->id }}" @endif>
                                            <i class="fa fa-angle-right "></i> {{ $item->title }}
                                        </a>
                                    </div>
                                    <div id="locationcard-collape-{{ $item->id }}" class="collapse  @if(in_array(request()->get('location'), $item->children->pluck('id')->toArray()))show @endif" aria-labelledby="locationcard-{{ $item->id }}" data-parent="#locationAccordion">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                @foreach($item->children as $subItem)
                                                    <li><a class="@if(request()->get('location') == $subItem->id)text-primary @endif" href="{{ request()->fullUrlWithQuery(['location' => $subItem->id]) }}">{{ $subItem->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="sidebar_price_range mt-30">
                    <div class="sidebar_title">
                        <h5 class="title">Baha aralygy</h5>
                    </div>
                    <form action="{{ request()->fullUrl() }}">
                        <div class="price_range_content">
                            <div class="range-slider">
                                <input type="text" name="" class="js-range-slider" value="" />
                            </div>
                            <div class="extra-controls">
                                <input type="text" name="start_price" class="js-input-from" value="{{ request()->get('start_price') ?? 0 }}" onchange="$(this).closest('form').submit()" />
                                <input type="text" name="end_price" class="js-input-to" value="{{ request()->get('end_price') ?? 0 }}" onchange="$(this).closest('form').submit()" />
                            </div>
                        </div>
                        <button class="btn btn-primary">Ýerine ýetir</button>

                        @foreach(request()->all() as $key => $value)
                            @if($key == 'start_price') @continue @endif
                            @if($key == 'end_price') @continue @endif
                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <form action="{{ request()->fullUrl() }}">
                <div class="product_topbar d-md-flex align-items-center justify-content-between pb-0">
                    <div class="product_select pt-40 d-flex flex-wrap">
                        <select style="display: none;" name="order" class="filter_input" onchange="$(this).closest('form').submit()">
                            <option value="new" @if(request()->get('order') == 'new')selected @endif >Iň täzeleri</option>
                            <option value="cheap" @if(request()->get('order') == 'cheap')selected @endif>Arzandan başla</option>
                            <option value="expensive" @if(request()->get('order') == 'expensive')selected @endif>Gymmatdan başla</option>
                            <option value="viewed" @if(request()->get('order') == 'viewed')selected @endif>Iň köp görülenler</option>
                        </select>
                    </div>
                </div>
                @foreach(request()->all() as $key => $value)
                    @if($key == 'order') @continue @endif
                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                @endforeach
            </form>
            <div class="product_grid">
                <div class="row">
                    @foreach($products as $product)
                        @include('app.product._block', ['product' => $product])
                    @endforeach
                </div>
            </div>




            <div class="pagination_wrapper mt-50">
                {{ $products->appends(request()->input())->links() }}
            </div>


        </div>
    </div>
@endsection
