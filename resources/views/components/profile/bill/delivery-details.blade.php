<div class="bill-dt-step">
    <div class="bill-title">
        <h4>{{ _('global.bill:DeliveryDetails') }}</h4>
    </div>
    <div class="bill-descp">
        <p class="bill-dt-sl">{{ __('global.bill:OrderID', ['OrderID' => $quote->number_a]) }}</p>
        <p class="bill-dt-sl">{{ __('global.bill:Items', ['Items' => $quote->items()->count()]) }}</p>
        <p class="bill-dt-sl">{{ __('global.bill:Timing', ['Timing' => $quote->delivery_time]) }}</p>
    </div>
</div>