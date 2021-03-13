                        <div class="pdpt-bg mt-0">
                            <div class="pdpt-title">
                                <h4>{{ __('global.Order Summary') }}</h4>
                            </div>
                            <div class="right-cart-dt-body">
                                @if($quote)
                                    @foreach($quote->items()->get() as $item)
                                        <x-cart.cart-item :product="$item" />
                                    @endforeach
                                @endif
                            </div>
                            <div class="total-checkout-group">
                                <div class="cart-total-dil">
                                    <h4>{{ __('global.Your cart Super Market price') }}</h4>
                                    <span>{{ __('global.toman', ["price" => $item->takeCurrency($quote->amount) ]) }}</span>
                                </div>
                                <div class="cart-total-dil pt-3">
                                    <h4>{{ __('global.Delivery Charges') }}</h4>
                                    <span>{{ __('global.toman', ["price" => $item->takeCurrency($quote->shipping_cost) ]) }}</span>
                                </div>
                            </div>
                            <div class="cart-total-dil saving-total ">
                                <h4>{{ __('global.Total Saving') }}</h4>
                                <span>{{ __('global.toman', ["price" => $item->takeCurrency($quote->pre_discounted_amount) ]) }}</span>                            </div>
                            <div class="main-total-cart">
                                <h2>{{ __('global.Total') }}</h2>
                                <span>{{ __('global.toman', ["price" => $item->takeCurrency($quote->grand_total_amount) ]) }}</span>
                            </div>
                            <div class="payment-secure">
                                <i class="uil uil-padlock"></i>{{ __('global.Secure checkout') }}
                            </div>
                        </div>
