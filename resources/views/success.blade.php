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
                     <p>{{ __('global.Thank you for your order! will received order timing -') }} <span>(شنبه , 3.00PM - 5.00PM)</span></p>
                     <div class="delivery-address-bg">
                         <div class="title585">
                             <div class="pln-icon"><i class="uil uil-telegram-alt"></i></div>
                             <h4>{{ __('global.Your order will be sent to this address') }}</h4>
                         </div>
                         <ul class="address-placed-dt1">
                             <li>
                                 <p><i class="uil uil-map-marker-alt"></i>Address :<span>#000, St 8, Sks Nagar, Near Pakhowal Road, Ldh, 141001</span></p>
                             </li>
                             <li>
                                 <p><i class="uil uil-phone-alt"></i>Phone Number :<span>+919999999999</span></p>
                             </li>
                             <li>
                                 <p><i class="uil uil-envelope"></i>Email Address :<span><a href="../../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="cca6a3a4a2a8a3a98ca9b4ada1bca0a9e2afa3a1">[email&#160;protected]</a></span></p>
                             </li>
                             <li>
                                 <p><i class="uil uil-card-atm"></i>Payment Method :<span>Cash on Delivery</span></p>
                             </li>
                         </ul>
                         <div class="stay-invoice">
                             <div class="st-hm">Stay Home<i class="uil uil-smile"></i></div>
                             <a href="#" class="invc-link hover-btn">{{ __('global.trackorder') }}</a>
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
