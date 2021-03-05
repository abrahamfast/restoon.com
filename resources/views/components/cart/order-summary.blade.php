                        <div class="pdpt-bg mt-0">
                            <div class="pdpt-title">
                                <h4>{{ __('global.Order Summary') }}</h4>
                            </div>
                            <div class="right-cart-dt-body">
                                @if($quote_items)
                                    @foreach($quote_items as $item)
                                        <x-cart.cart-item :item="$item" />
                                    @endforeach
                                @endif
                            </div>
                            <div class="total-checkout-group">
                                <div class="cart-total-dil">
                                    <h4>Super Market</h4>
                                    <span>$15</span>
                                </div>
                                <div class="cart-total-dil pt-3">
                                    <h4>Delivery Charges</h4>
                                    <span>$1</span>
                                </div>
                            </div>
                            <div class="cart-total-dil saving-total ">
                                <h4>Total Saving</h4>
                                <span>$3</span>
                            </div>
                            <div class="main-total-cart">
                                <h2>Total</h2>
                                <span>$16</span>
                            </div>
                            <div class="payment-secure">
                                <i class="uil uil-padlock"></i>{{ __('global.Secure checkout') }}
                            </div>
                        </div>
