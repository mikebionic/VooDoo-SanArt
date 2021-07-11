<div class="{{ $col ?? 'col-lg-3 col-sm-6' }}">
    <div class="single_ads_card mt-30">
        <div class="ads_card_image">
            <img src="{{ asset($product->cover_path) }}" alt="ads">
        </div>
        <div class="ads_card_content">
            <h4 class="title" style="font-size: 30px;">
                <a href="{{ route('app.product.show', ['product' => $product]) }}">{{ $product->title }}</a>
            </h4>
            @if($product->location)
            <p style="font-size: 12px;">
                <i class="far fa-map-marker-alt"></i>
                {{ optional($product->location)->title }}
            </p>
            @endif
            <div class="ads_price_date d-flex justify-content-between">
                <span class="price">{{ $product->priceText() }}</span>
{{--                <span class="date">{{ $product->updated_at->format('d M, Y') }}</span>--}}
                <a href="tel:{{ $product->phoneNumber() }}">
                    <p class="sticker" style="color: #28a745; font-size:30px">
                        <i class="far fa-phone"></i>
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>
