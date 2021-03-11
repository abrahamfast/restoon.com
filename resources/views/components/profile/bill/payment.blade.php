<div class="bill-dt-step">
    <div class="bill-title">
        <h4>{{ __('global.bill-Payment') }}</h4>
    </div>
    <div class="bill-descp">
        <div class="total-checkout-group p-0 border-top-0">
            <div class="cart-total-dil">
                <h4>{{ __('global.bill-Subtotal') }}</h4>
                <span>{{ $quote->grand_total_amount }}</span>
            </div>
            <div class="cart-total-dil pt-3">
                <h4>{{ __('global.bill-DeliveryCharges') }}</h4>
                <span>هیچی</span>
            </div>
        </div>
        <div class="main-total-cart pl-0 pr-0 pb-0 border-bottom-0">
            <h2>{{ __('global.Total') }}</h2>
            <span>{{ $quote->grand_total_amount }}</span>
        </div>
    </div>
</div>