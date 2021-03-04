@extends('layouts.main')

@push('link')
<link href="/css/step-wizard.css" rel="stylesheet">
@endpush

@section('wrapper')
<x-breadcrumb :slug="$slug"/>
 <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div id="checkout_wizard" class="checkout accordion left-chck145">
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingOne">
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> {{ __('global.Phone Number Verification') }}</button>
                                    </h4>
                                    <span class="checkout-step-number">۱</span>
                                </div>
                                <div id="collapseOne" class="collapse in show" data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <p>{{ __('global.We need your phone number so we can inform you about any delay or problem') }}</p>
                                        @if(Auth::user())
	                                        <p class="phn145">{{ __('global.4 digits code send your phone')}} <span>{{ Auth::user()->phone }}</span>
	                                        	<a class="edit-no-btn hover-btn" data-toggle="collapse" href="#edit-number">{{ __('global.Edit') }}</a>
	                                        </p>
                                        @endif
                                        @guest()
                                        <div class="" id="edit-number">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="checkout-login">
                                                        <form id="form-verification" method="POST" action="/verification/otp">
                                                            @csrf
                                                        	<a class="chck-btn hover-btn" role="button" id="otp-verifaction"  href="#otp-verifaction">{{ __('global.Send Code') }}</a>
                                                            <div class="login-phone">
                                                                <input type="text" name="phone" class="form-control" placeholder="{{ __('global.Phone Number') }}">
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endguest
                                        <div class="otp-verifaction">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-0">
                                                        <label class="control-label">{{ __('global.Enter Code') }}</label>
                                                        <ul class="code-alrt-inputs">
                                                            <li>
                                                                <input id="code[1]" maxlength="1" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                                            </li>
                                                            <li>
                                                                <input id="code[2]" maxlength="1" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                                            </li>
                                                            <li>
                                                                <input id="code[3]" maxlength="1" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                                            </li>
                                                            <li>
                                                                <input id="code[4]" maxlength="1" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                                            </li>
                                                            <li>
                                                                <a class="collapsed chck-btn hover-btn" role="button" data-toggle="collapse" data-parent="#checkout_wizard" href="#collapseTwo">{{ __('global.Next') }}</a>
                                                            </li>
                                                        </ul>
                                                        <a href="#" class="resend-link">{{ __('global.Resend Code') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingTwo">
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> {{ __('global.Delivery Address') }}</button>
                                    </h4>
                                    <span class="checkout-step-number">۲</span>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <div class="checout-address-step">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form class="">

                                                        <div class="form-group">
                                                            <div class="product-radio">
                                                                <ul class="product-now">
                                                                    <li>
                                                                        <input type="radio" id="ad1" name="address1" checked>
                                                                        <label for="ad1">{{ __('global.Home') }}</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="radio" id="ad2" name="address1">
                                                                        <label for="ad2">{{ __('global.Office') }}</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="radio" id="ad3" name="address1">
                                                                        <label for="ad3">{{ __('global.Other') }}</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="address-fieldset">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">{{ __('global.Name') }}*</label>
                                                                        <input id="name" name="name" type="text" placeholder="{{ __('global.placeholderName') }}" class="form-control input-md" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">{{ __('global.Email Address') }}*</label>
                                                                        <input id="email1" name="email1" type="text" placeholder="{{ __('global.Email Address') }}" class="form-control input-md" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">{{ __('global.HouseOfficeNo') }}*</label>
                                                                        <input id="flat" name="flat" type="text" placeholder="{{ __('global.address') }}" class="form-control input-md" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">{{ __('global.StreetSocietyOfficeName') }}*</label>
                                                                        <input id="street" name="street" type="text" placeholder="{{ __('global.StreetAddress') }}" class="form-control input-md">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">{{ __('global.Pincode') }}*</label>
                                                                        <input id="pincode" name="pincode" type="text" placeholder="{{ __('global.Pincode') }}" class="form-control input-md" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">{{ __('global.Locality') }}*</label>
                                                                        <input id="Locality" name="locality" type="text" placeholder="{{ __('global.Enter City') }}" class="form-control input-md" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <div class="address-btns">
                                                                            <button class="save-btn14 hover-btn">{{ __('global.Save') }}</button>
                                                                            <a class="collapsed ml-auto next-btn16 hover-btn" role="button" data-toggle="collapse" data-parent="#checkout_wizard" href="#collapseThree"> {{ __('global.Next') }} </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingThree">
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">{{ __('global.Delivery Time & Date') }} </button>
                                    </h4>
                                    <span class="checkout-step-number">۳</span>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">{{ __('global.Select Date and Time') }}*</label>
                                                    <div class="date-slider-group">
                                                        <div class="owl-carousel date-slider owl-theme">
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd3" name="address1">
                                                                    <label for="dd3">شنبه ۲۱ خرداد</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd3" name="address1">
                                                                    <label for="dd3">شنبه ۲۰ خرداد</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd2" name="address1">
                                                                    <label for="dd2">{{ __('global.Tomorrow') }}</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd1" name="address1" checked="">
                                                                    <label for="dd1">{{ __('global.Today') }}</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="time-radio">
                                                        <div class="ui form">
                                                            <div class="grouped fields">
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" checked="" tabindex="0" class="hidden">
                                                                        <label>{{ __('global.8_00AM_10_00AM')}}</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                                        <label>{{ __('global.10_00AM_12_00AM')}}</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                                        <label>{{ __('global.12_00AM_14_00PM')}}</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                                        <label>{{ __('global.14_00AM_16_00PM')}}</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                                        <label>{{ __('global.16_00AM_18_00PM')}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="collapsed next-btn16 hover-btn" role="button" data-toggle="collapse" href="#collapseFour"> {{ __('global.Proccess to payment') }} </a>
                                    </div>
                                </div>
                            </div>
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
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="pdpt-bg mt-0">
                            <div class="pdpt-title">
                                <h4>{{ __('global.Order Summary') }}</h4>
                            </div>
                            <div class="right-cart-dt-body">
                                <div class="cart-item border_radius">
                                    <div class="cart-product-img">
                                        <img src="images/product/img-11.jpg" alt="">
                                        <div class="offer-badge">4% OFF</div>
                                    </div>
                                    <div class="cart-text">
                                        <h4>Product Title Here</h4>
                                        <div class="cart-item-price">$15 <span>$18</span></div>
                                        <button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                                    </div>
                                </div>
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
                        <a href="#" class="promo-link45">{{__('global.Have a promocode')}}</a>
                        <div class="checkout-safety-alerts">
                            <p>{{ __('global.Replacement Guarantee') }}<i class="uil uil-sync"></i></p>
                            <p>{{ __('global.Genuine Products') }}<i class="uil uil-check-square"></i></p>
                            <p>{{ __('global.Secure Payments') }}<i class="uil uil-shield-check"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop

@push('js')
    <script>
        $('#otp-verifaction').on('click', function(e){
            e.preventDefault()
            console.log(this);
            $('#form-verification').submit()
        });
    </script>
@endpush