<div class="total-dt">
    <div class="total-checkout-group">
        <div class="cart-total-dil">
        	<span>{{ $quote->tax_rate }}</span>
            <h4>{{ __('global.tax rate') }}</h4>
        </div>
        <div class="cart-total-dil pt-3">
        	<span>{{ $quote->shipping_cost }}</span>
            <h4>{{ __('global.Delivery Charges') }}</h4>
        </div>
    </div>
    <div class="main-total-cart">
    	<span>{{ $quote->amount }}</span>
        <h2>{{ __('global.Total') }}</h2>
    </div>
</div>