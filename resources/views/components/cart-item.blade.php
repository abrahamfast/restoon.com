<div class="cart-item">
    <div class="cart-product-img">
        <img src="/dataloader/{{ $item->product()->first()->cover_id }}" alt="">
        @if($item->product()->first()->discount)
            <div class="offer-badge">{{ $item->product()->first()->discount}} % تخفیف</div>
        @endif
    </div>
    <div class="cart-text">
        <h4>{{ $item->name }}</h4>
        <div class="qty-group">
            <div class="quantity buttons_added">
                <input type="button" value="-" class="minus minus-btn">
                <input type="number" step="1" name="quantity" value="{{ $item->quantity }}" class="input-text qty text">
                <input type="button" value="+" class="plus plus-btn">
            </div>
            @if($item->product()->first()->discount)
                <div class="cart-item-price">{{ $item->product()->first()->discountdiscount_price }} <span>{{ $item->product()->first()->discountcost_price }}</span></div>
            @else
                <div class="cart-item-price">{{ $item->product()->first()->discountcost_price }}</div>
            @endif
        </div>
        <a type="button" class="cart-close-btn btn-block"><i class="uil uil-multiply"></i></button>
    </div>
</div>