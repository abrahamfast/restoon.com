@extends('layouts.main')

@push('link')
<link href="/css/step-wizard.css" rel="stylesheet">
@endpush

@section('wrapper')
 <x-breadcrumb :slug="$slug"/>
 <div class="all-product-grid">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-6 col-md-8">
                 <div class="order-placed-dt">
                     <i class="uil uil-check-circle icon-circle"></i>
                     <h2>{{ __('global.Order Successfully Placed') }}</h2>
                     <p>{{ __('global.Thank you for your order! will received order timing') }} <br><span>(شنبه , 3.00PM - 5.00PM)</span></p>
                     <span>{{ $quote->number_a}}</span>
                     <span>{{ __('global.quote number') }} </span> 
                     <div class="delivery-address-bg">
                         <div class="title585">
                             <div class="pln-icon"><i class="uil uil-telegram-alt"></i></div>
                             <h4>{{ __('global.Your order will be sent to this address') }}</h4>
                         </div>
                         <ul class="address-placed-dt1">
                             <li>
                                 <p><i class="uil uil-map-marker-alt"></i>{{ __('global.shipping_address_street') }} :<span>{{ $user->account()->first()->getFullAddress() }}</span></p>
                             </li>
                             <li>
                                 <p><i class="uil uil-phone-alt"></i>{{ __('global.Phone Number')}} :<span>{{ $user->phone }}</span></p>
                             </li>
                             <li>
                                 <p><i class="uil uil-card-atm"></i>{{ __('global.Payment Method')}} :<span>{{ __('global.' . $quote->payment_method) }}</span></p>
                             </li>
                         </ul>
                         <div class="stay-invoice">
                            <a href="#" class="invc-link hover-btn">{{ __('global.trackorder') }}</a>
                             <div class="st-hm">{{ __('global.Stay Home') }}<i class="uil uil-smile"></i></div>
                         </div>
                         <div class="placed-bottom-dt">
                             پرداخت 16 هزار تومان هنگام تحویل کالا با سفارش شما انجام می شود.
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
@stop
