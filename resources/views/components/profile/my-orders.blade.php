<div class="pdpt-bg">
    <div class="pdpt-title">
        <h6>{{ __('global.Delivery Timing') }} {{ $quote->delivery_time }}</h6>
    </div>
    <div class="order-body10">
        <ul class="order-dtsll">
            <li>
                <div class="order-dt-img">
                    <img src="/images/groceries.svg" alt="">
                </div>
            </li>
            <li>
                <div class="order-dt47">
                    <h4>{{ $account->name }}</h4>
                    <p>{{ __('global.Delivered')}} - {{ $account->name }}</p>
                    <div class="order-title">{{ $quote->items()->count() }} {{ __('global.items')}} <span data-inverted="" data-tooltip="2kg broccoli, 1kg Apple" data-position="top center">?</span></div>
                </div>
            </li>
        </ul>
        <div class="total-dt">
            <div class="total-checkout-group">
                <div class="cart-total-dil">
                    <h4>{{ __('global.tax rate') }}</h4>
                    <span>{{ $quote->tax_rate }}</span>
                </div>
                <div class="cart-total-dil pt-3">
                    <h4>{{ __('global.Delivery Charges') }}</h4>
                    <span>{{ $quote->shipping_cost }}</span>
                </div>
            </div>
            <div class="main-total-cart">
                <h2>{{ __('global.Total') }}</h2>
                <span>{{ $quote->amount }}</span>
            </div>
        </div>
        <x-profile.track-order/>
        <div class="alert-offer">
            <img src="/images/ribbon.svg" alt=""> 
                        همراه با تخفیف‌های ویژه به مناسبت چهارده سالگی     
                        ۱۱ تا ۳۰ بهمن
                         (تا پایان اسفند ماه تمدید شد)
        </div>
        <div class="call-bill">
            <div class="delivery-man">
                {{ __('global.Delivery Boy') }} - <a href="tel:02122222222"><i class="uil uil-phone"></i> {{ __('global.Call Us') }}</a>
            </div>
            <div class="order-bill-slip">
                <a href="#" class="bill-btn5 hover-btn">View Bill</a>
            </div>
        </div>
    </div>
</div>