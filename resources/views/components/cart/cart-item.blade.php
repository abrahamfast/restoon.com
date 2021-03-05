<div class="cart-item border_radius">
    <div class="cart-product-img">
        <img src="/dataloader/{{ $product->getCover() }}" alt="">
        @if($product->discount)
            <div class="offer-badge">{{ $product->discount}} % تخفیف</div>
        @endif
    </div>
    <div class="cart-text">
        <h4>{{ $product->name }}</h4>
        @if($item->product()->first()->discount)
            <div class="cart-item-price">{{ $product->discount_price }} <span>{{ $product->discount_price }}</span></div>
        @else
            <div class="cart-item-price">{{ $product->discount_price}}</div>
        @endif
        <a href="/cart/unlink/{{$item->id}}" class="cart-close-btn"><i class="uil uil-multiply"></i></a>
    </div>
</div>
