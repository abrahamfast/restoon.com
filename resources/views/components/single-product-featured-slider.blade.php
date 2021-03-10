<div class="item">
    <div class="product-item">
        <a href="/product/{{ $product->id }}" class="product-img">
            <img src="/dataloader/{{ $product->getCover() }}" alt="">
            <div class="product-absolute-options">
                @if($product->discount)
                    <span class="offer-badge-1">{{ $product->discount }}% تخفیف</span>
                @endif
                <span class="like-icon" title="wishlist" data-product-id="{{ $product->id }}"></span>
            </div>
        </a>
        <div class="product-text-dt">
            @if($product->status == 'Available')
                <p>موجود<span>(در انبار)</span></p>
            @else
                <p>ناموجود</p>
            @endif
            <h4>{{ $product->name }}</h4>
            <div class="product-price">
                {{ 
                    __('global.toman', [
                    "price" => number_format(round($product->discount_price / 10)) ?? number_format(round($product->list_price / 10))
                    ])
                }}
            </div>
            @if($product->pricing_type == 'Discount from List') 
                <div class="product-price">
                    {{ __('global.toman', ["price" => notowo(number_format(round($product->discount_price / 10)), 'fa')]) }} 
                    <span>{{ {{ __('global.toman', ["price" => notowo(number_format(round($product->list_price / 10)), 'fa')]) }}</span>
                </div>
            @else
                 <div class="product-price">
                    {{ __('global.toman', ["price" => notowo(number_format(round($product->list_price / 10)), 'fa')]) }}
                </div>
            @endif
            <div class="qty-cart">
                <div class="quantity buttons_added">
                    <form action="/cart/add" method="POST">
                        @csrf
                        <input type="hidden" name="product-id" value="{{ $product->id }}">
                        <input type="button" value="-" class="minus minus-btn">
                        <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                        <input type="button" value="+" class="plus plus-btn">
                    </form>
                </div>
                <p>{{ __('global.' . $product->unit_weight, ['num' => $product->weight]) }}</p>
                <span class="cart-icon"><i class="uil uil-shopping-cart-alt addcart" data-product-id="{{ $product->id }}"></i></span>
            </div>
        </div>
    </div>
</div>