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
        <span>{{ $quote->amount }}</span>
        <h2>{{ __('global.Total') }}</h2>
    </div>
</div>