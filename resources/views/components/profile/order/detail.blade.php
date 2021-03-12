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