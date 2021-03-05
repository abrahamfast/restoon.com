<div class="cart-item border_radius">
    <div class="cart-product-img">
        <img src="/dataloader/{{ $product->product()->first()->getCover() }}" alt="">
        @if($product->product()->first()->discount)
            <div class="offer-badge">{{ $product->product()->first()->discount}} % تخفیف</div>
        @endif
    </div>
    <div class="cart-text">
        <h4>{{ $product->product()->first()->name }}</h4>
        @if($product->product()->first()->discount)
            <div class="cart-item-price">{{ $product->product()->first()->discount_price }} <span>{{ $product->product()->first()->discount_price }}</span></div>
        @else
            <div class="cart-item-price">{{ $product->product()->first()->discount_price}}</div>
        @endif
        <a href="/cart/unlink/{{$product->id}}" class="cart-close-btn"><i class="uil uil-multiply"></i></a>
    </div>
</div>
