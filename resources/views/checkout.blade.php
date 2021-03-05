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
                            <x-cart.verification />
                            <x-cart.delivery-addresses />
                            <x-cart.delivery-time />
                            <x-cart.payment-method />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <x-cart.order-summary :quote="$quote" />
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
