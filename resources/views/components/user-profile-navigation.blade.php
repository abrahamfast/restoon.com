<li class="ui dropdown">
    <a href="#" class="opts_account">
        <img src="/images/avatar/img-5.jpg" alt="">
        @guest
            <span class="user__name">{{ __('global.panel') }}</span>
        @else
            <span class="user__name">{{ Auth::user()->name }}</span>
        @endguest

        <i class="uil uil-angle-down"></i>
    </a>

    <div class="menu dropdown_account">
        <div class="night_mode_switch__btn">
            <a href="#" id="night-mode" class="btn-night-mode">
                <i class="uil uil-moon"></i> {{ __('global.Night mode') }}
                <span class="btn-night-mode-switch">
                    <span class="uk-switch-button"></span>
                </span>
            </a>
        </div>
        <a href="/app/overview" class="item channel_item">{{ __('global.Dashboard') }}<i class="uil uil-apps icon__1"></i></a>
        <a href="/app/orders" class="item channel_item">{{ __('global.My Orders') }}<i class="uil uil-box icon__1"></i></a>
        <a href="/app/wishlist" class="item channel_item">{{ __('global.My Wishlist') }}<i class="uil uil-heart icon__1"></i></a>
        <a href="/app/addresses" class="item channel_item">{{ __('global.My Address') }}<i class="uil uil-location-point icon__1"></i></a>
        <a href="/app/offers" class="item channel_item">{{ __('global.Offers') }}<i class="uil uil-gift icon__1"></i></a>
        <a href="/app/faq" class="item channel_item">{{ __('global.Faq') }}<i class="uil uil-info-circle icon__1"></i></a>
        <a href="{{ route('logout') }}" class="item channel_item"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('global.Logout') }}<i class="uil uil-lock-alt icon__1"></i></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
