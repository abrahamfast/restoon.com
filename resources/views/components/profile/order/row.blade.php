<div class="pdpt-bg">
    <div class="pdpt-title">
        <h6>{{ __('global.Delivery Timing') }} {{ $quote->delivery_time }}</h6>
    </div>
    <div class="order-body10">
    	<x-profile.order.detail :account="$account" :quote="$quote" />
    	<x-profile.order.check-out :quote="$quote" />
        <x-profile.order.track :quote="$quote"/>

        <div class="alert-offer">
            <img src="/images/ribbon.svg" alt=""> 
                        همراه با تخفیف‌های ویژه به مناسبت چهارده سالگی     
                        ۱۱ تا ۳۰ بهمن
                         (تا پایان اسفند ماه تمدید شد)
        </div>
        <div class="call-bill">
        	 <div class="order-bill-slip">
                <a href="/app/bill/{{ $quote->id }}" class="bill-btn5 hover-btn">{{ __('global.View Bill') }}</a>
            </div>
            <div class="delivery-man">
                {{ __('global.Delivery Boy') }} <a href="tel:02122222222"><i class="uil uil-phone"></i> {{ __('global.Call Us') }}</a>
            </div>

        </div>
    </div>
</div>
