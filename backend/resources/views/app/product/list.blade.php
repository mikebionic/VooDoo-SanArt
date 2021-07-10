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
                                    <a href="{{ request()->fullUrlWithQuery(['category' => null]) }}" >
                                        <i class="fa fa-box"></i> Ählisi
                                    </a>
                                </div>
                            </div>
                            @foreach(\App\Models\Category::parents()->get() as $item)
                                <div class="card">
                                    <div class="card-header" id="categorycard-{{ $item->id }}">
                                        <a href="{{ count($item->children) > 0 ? '#' : request()->fullUrlWithQuery(['category' => $item->id]) }}" @if(count($item->children) > 0) class="collapsed"
                                           data-toggle="collapse"
                                           data-target="#categorycard-collape-{{ $item->id }}"
                                           aria-expanded="false"
                                           aria-controls="categorycard-collape-{{ $item->id }}" @endif>
                                            <i class="fa fa-box"></i> {{ $item->title }}
                                        </a>
                                    </div>
                                    <div id="categorycard-collape-{{ $item->id }}" class="collapse" aria-labelledby="categorycard-{{ $item->id }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                @foreach($item->children as $subItem)
                                                    <li><a href="{{ request()->fullUrlWithQuery(['category' => $subItem->id]) }}">{{ $subItem->title }}</a></li>
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
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <form action="{{ request()->fullUrl() }}">
                <div class="product_topbar d-md-flex align-items-center justify-content-between pb-30">
                    <div class="product_select pt-40 d-flex flex-wrap">
                        <select style="display: none;" name="order" class="filter_input" onchange="$(this).closest('form').submit()">
                            <option value="new" @if(request()->get('order') == 'new')selected @endif >Iň täzeleri</option>
                            <option value="cheap" @if(request()->get('order') == 'cheap')selected @endif>Arzandan başla</option>
                            <option value="expensive" @if(request()->get('order') == 'expensive')selected @endif>Gymmatdan başla</option>
                            <option value="viewed" @if(request()->get('order') == 'viewed')selected @endif>Iň köp görülenler</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                    <div class="product_grid">
                        <div class="row">
                            @foreach($products as $product)
                                @include('app.product._block', ['product' => $product])
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                    <div class="product_list">
                        <div class="single_ads_card ads_list d-sm-flex mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-1.png" alt="ads">
                            </div>
                            <div class="ads_card_content media-body">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram &amp; Laptop</p>
                                    <a class="like" href="product.html#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product.html#">Front+Back Full Body Protect Screen Protector</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_ads_card ads_list d-sm-flex mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-2.png" alt="ads">
                            </div>
                            <div class="ads_card_content media-body">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram &amp; Laptop</p>
                                    <a class="like" href="product.html#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product.html#">Front+Back Full Body Protect Screen Protector</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_ads_card ads_list d-sm-flex mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-3.png" alt="ads">
                            </div>
                            <div class="ads_card_content media-body">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram &amp; Laptop</p>
                                    <a class="like" href="product.html#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product.html#">Front+Back Full Body Protect Screen Protector</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_ads_card ads_list d-sm-flex mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-4.png" alt="ads">
                            </div>
                            <div class="ads_card_content media-body">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram &amp; Laptop</p>
                                    <a class="like" href="product.html#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product.html#">Front+Back Full Body Protect Screen Protector</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_ads_card ads_list d-sm-flex mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-5.png" alt="ads">
                            </div>
                            <div class="ads_card_content media-body">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram &amp; Laptop</p>
                                    <a class="like" href="product.html#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product.html#">Front+Back Full Body Protect Screen Protector</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_ads_card ads_list d-sm-flex mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-6.png" alt="ads">
                            </div>
                            <div class="ads_card_content media-body">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram &amp; Laptop</p>
                                    <a class="like" href="product.html#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product.html#">Front+Back Full Body Protect Screen Protector</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="pagination_wrapper mt-50">
                {{ $products->appends(request()->input())->links() }}
            </div>


        </div>
    </div>
@endsection
