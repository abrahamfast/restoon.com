    <div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
        @if($quote)
        <div class="bs-canvas-header side-cart-header p-3 ">
            <div class="d-inline-block  main-cart-title">{{ __('global.My Cart') }} <span>( {{$itemsCount ?? 0 }} {{ __('global.Items') }})</span></div>
            <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
        </div>
        <div class="bs-canvas-body">
            <div class="cart-top-total">
                <div class="cart-total-dil">
                    <span>{{ $amount ?? 0 }}</span>
                    <h4>{{ __('global.Your cart Super Market price') }}</h4>
                </div>
                <div class="cart-total-dil pt-2">
                    <span>{{ $shipping_cost ?? 0 }}</span>
                    <h4>{{ __('global.Delivery Charges') }}</h4>
                </div>
            </div>
            <div class="side-cart-items">
                @if($quote_items)
                    @foreach($quote_items as $item)
                        <x-cart-item :item="$item" />
                    @endforeach
                @endif
            </div>
        </div>
        <div class="bs-canvas-footer">
            <div class="cart-total-dil saving-total ">
                <span>{{ notowo($discount_amount, 'fa') ?? 0 }} {{ __('global.toman') }}</span>
                <h4>{{ __('global.Total Saving') }}</h4>
            </div>
            <div class="main-total-cart">
                <span>{{ notowo($amount, 'fa') ?? 0 }} {{ __('global.toman') }}</span>
                <h2>{{ __('global.Total') }}</h2>
            </div>
            <div class="checkout-cart">
                <form action="/app/checkout" method="post">
                    @csrf
                    <input type="hidden" name="quoteId" value="{{ $quote->id }}" >
                {{-- <a href="#" class="promo-code">Have a promocode?</a> --}}
                    <button type="submit"  @if(!$total_amount) disabled="disabled" @endif class="cart-checkout-btn hover-btn btn-block">{{ __('global.Proceed to Checkout') }}</button>
                </form>
            </div>
        </div>
        @else
            <div class="col-lg-12 col-md-12">
                <div class="how-order-steps">
                    <div class="how-order-icon">
                        <i class="uil uil-shopping-basket"></i>
                    </div>
                    <h4>{{ __('global.Add item to your shopping Basket') }}</h4>
                </div>
            </div>
        @endif
    </div>
