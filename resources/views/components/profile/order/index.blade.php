<div class="row">
    <div class="col-md-12">
        <div class="main-title-tab">
            <h4><i class="uil uil-box"></i>{{ __('global.MyOrders') }}</h4>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        @if($user->quote()->count())
            @foreach($user->quote()->get() as $quote)
                <x-profile.order.row :quote="$quote" :account="$user->account" />
            @endforeach
        @endif
    </div>
</div>