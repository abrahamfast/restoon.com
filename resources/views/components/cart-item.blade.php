<div class="cart-item">
    <div class="cart-product-img">
        <img src="/dataloader/{{ $item->product()->first()->getCover() }}" alt="">
        @if($item->discount)
            <div class="offer-badge">{{ $item->discount}} % تخفیف</div>
        @endif
    </div>
    <div class="cart-text">
        <h4>{{ $item->name }}</h4>
        <div class="qty-group">
            <div class="quantity buttons_added">
                <input type="number" step="1" name="quantity" value="{{ $item->quantity }}" class="input-text qty text">
            </div>
            @if($item->discount)
                <div class="cart-item-price">
                    {{ $item->unit_price }} 
                     {{ __('global.toman', ["price" => $item->takeCurrencyAttr('unit_price') ]) }}
                    <span>{{ $item->list_price }}</span>
                    <span>{{ __('global.toman', ["price" => $item->takeCurrencyAttr('list_price') ]) }}</span>
                </div>
            @else
                <div class="cart-item-price">{{ $item->understandAttr('list_price') }}</div>
            @endif

        </div>
        <div class="qty-group">
                <div class="cart-item-price">{{ $item->understandAttr('amount') }} {{ __('global.rial') }}</div>
        </div>
        <a href="/cart/unlink/{{$item->id}}" class="cart-close-btn"><i class="uil uil-multiply"></i></a>
    </div>
</div>
