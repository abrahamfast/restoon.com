<div class="row">
    <div class="col-md-12">
        <div class="main-title-tab">
            <h4><i class="uil uil-apps"></i>{{ __('global.Overview') }}</h4>
        </div>
        <div class="welcome-text">
            <h2>{{ __('global.Hi') }}: {{ $user->name }}</h2>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="pdpt-bg">
            <div class="pdpt-title">
                <h4>{{ __('global.My Account') }}</h4>
            </div>
            <div class="ddsh-body">
                <h2>{{ __('global.FUll Name') }}: {{ $user->name }}</h2>
                <h2>{{ __('global.Phone Number') }}: {{ $user->phone }}</h2>
                <h2>{{ __('global.Email') }}: {{ $user->email }}</h2>
                <h2>{{ __('global.Register On') }}: {{ $user->created_at }}</h2>
                <h2>{{ __('global.shipping_address_street') }}: {{ $user->account->shipping_address_street }}</h2>
                <h2>{{ __('global.shipping_address_city') }}: {{ $user->account->shipping_address_city }}</h2>
                <h2>{{ __('global.shipping_address_state') }}: {{ $user->account->shipping_address_state }}</h2>
                <h2>{{ __('global.shipping_address_country') }}: {{ $user->account->shipping_address_country }}</h2>
                <h2>{{ __('global.shipping_address_postal_code') }}: {{ $user->account->shipping_address_postal_code }}</h2>
            </div>
            <a href="#" class="more-link14">{{ __('global.Edit') }} <i class="uil uil-angle-double-right"></i></a>
        </div>
    </div>
</div>

