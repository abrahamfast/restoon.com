<div class="bill-dt-step">
    <div class="bill-title">
        <h4>{{ __('global.bill-DeliveryAddress') }}</h4>
    </div>
    <div class="bill-descp">
        <div class="itm-ttl">{{ __('global.bill-Home') }}</div>
        <p class="bill-address">{{ $user->account()->first()->getFullAddress() }}</p>
    </div>
</div>