
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingFour">
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">{{__('global.Payment') }}</button>
                                    </h4>
                                    <span class="checkout-step-number">۴</span>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <div class="payment_method-checkout">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="rpt100">
                                                        <ul class="radio--group-inline-container_1">
                                                            <li>
                                                                <div class="radio-item_1">
                                                                    <input id="cashondelivery1" value="cashondelivery" name="paymentmethod" type="radio" data-minimum="50.0">
                                                                    <label for="cashondelivery1" class="radio-label_1">{{ __('global.Cash on Delivery') }}</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="radio-item_1">
                                                                    <input id="card1" value="card" name="paymentmethod" type="radio" data-minimum="50.0">
                                                                    <label for="card1" class="radio-label_1">{{ __('global.CreditDebit Card') }}</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-group return-departure-dts" data-method="cashondelivery">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="pymnt_title">
                                                                    <h4>{{ __('global.Cash on Delivery') }}</h4>
                                                                    <p>{{ __('global.Cash on Delivery will not be available if your order value exceeds') }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group return-departure-dts" data-method="card">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="pymnt_title mb-4">
                                                                    <h4>{{ __('global.paymentmethod') }}</h4>
                                                                </div>
                                                            </div>
                                                            {{ __('global.paymentmethod') }}
                                                        </div>
                                                    </div>
                                                    <a href="#" class="next-btn16 hover-btn">{{ __('global.placeorder') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>