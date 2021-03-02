    <div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
        <div class="bs-canvas-header side-cart-header p-3 ">
            <div class="d-inline-block  main-cart-title">{{ __('global.My Cart') }} <span>({{$cartCount ?? 0}} {{ __('global.Items') }})</span></div>
            <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
        </div>
        <div class="bs-canvas-body">
            <div class="cart-top-total">
                <div class="cart-total-dil">
                    <h4>{{ __('global.Your cart Super Market price') }}</h4>
                    <span>{{ $cartPrice ?? 0 }}</span>
                </div>
                <div class="cart-total-dil pt-2">
                    <h4>{{ __('global.Delivery Charges') }}</h4>
                    <span>{{ $cartDeliveryPrice ?? 0 }}</span>
                </div>
            </div>
            <div class="side-cart-items">
                @foreach($quote_items as $item)
                    <x-cart-item :item="$item" />
                @endforeach
            </div>
        </div>
        <div class="bs-canvas-footer">
            <div class="cart-total-dil saving-total ">
                <h4>{{ __('global.Total Saving') }}</h4>
                <span>{{ $cartPriceSave ?? 0 }}</span>
            </div>
            <div class="main-total-cart">
                <h2>{{ __('global.Total') }}</h2>
                <span>{{ $cartTotal ?? 0 }}</span>
            </div>
            <div class="checkout-cart">
                {{-- <a href="#" class="promo-code">Have a promocode?</a> --}}
                <a href="#" class="cart-checkout-btn hover-btn">{{ __('global.Proceed to Checkout') }}</a>
            </div>
        </div>
    </div>