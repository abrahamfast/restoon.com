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
             <div class="cart-item-price">{{ $item->quantity }} X {{ __('global.' . $item->product->unit_weight, ['num' => $item->product->weight]) }}</div>
        </div>
        <div class="qty-group">
            @if($item->discount)
                <div class="cart-item-price">
                     {{ __('global.toman', ["price" => $item->takeCurrencyAttr('unit_price') ]) }}
                    <span>{{ __('global.toman', ["price" => $item->takeCurrencyAttr('list_price') ]) }}</span>
                </div>
            @else
                <div class="cart-item-price">{{ __('global.toman', ["price" => $item->takeCurrencyAttr('list_price')]) }}</div>
            @endif

        </div>
        <div class="qty-group">
                <div class="cart-item-price">مجموع: {{ __('global.toman', ['price' => $item->giveToUnderstand($item->takeCurrency($item->amount)) ]) }}</div>
        </div>
        <a href="/cart/unlink/{{$item->id}}" class="cart-close-btn"><i class="uil uil-multiply"></i></a>
    </div>
</div>
