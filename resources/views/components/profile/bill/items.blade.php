<div class="bill-dt-step">
    <div class="bill-title">
        <h4>{{ __('global.bill-ItemsHead') }}</h4>
    </div>
    <div class="bill-descp">
        <div class="itm-ttl">{{ __('global.bill-itemsCount', ['count' => $items->count()]) }}</div>
        @foreach($items->get() as $item)
        	<div class="item-prdct">{{ $item->name }} : {{ $item->quantity }} عدد {{ __('global.' . $item->product->unit_weight, ['num' => $item->product->weight]) }}</div>
        @endforeach
    </div>
</div>
