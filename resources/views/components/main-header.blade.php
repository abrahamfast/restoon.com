<header class="header clearfix">
    <div class="top-header-group">
        <div class="top-header">
            <div class="res_main_logo">
                <a href="#"><img src="/images/dark-logo-1.png" alt=""></a>
            </div>
            <div class="main_logo" id="logo">
                <a href="#"><img src="/images/logo.png" alt=""></a>
                <a href="#"><img class="logo-inverse" src="/images/dark-logo.png" alt=""></a>
            </div>
            <x-select-location/>
            <div class="search120">
                <div class="ui search">
                    <div class="ui left icon input swdh10">
                        <input class="prompt srch10" name="what" type="text" placeholder="{{ __('global.Search for products') }}">
                        <i class='uil uil-search-alt icon icon1'></i>
                    </div>
                </div>
            </div>
            <div class="header_right">
                <ul>
{{--                     <li>
                        <a href="tel:02122222222" class="offer-link"><i class="uil uil-phone-alt"></i>۰۲۱۳۳۳۳۳۹۳</a>
                    </li> --}}
                    @guest
                    <li>
                        <a href="/register" class="offer-link"><i class="uil uil-user-circle"></i>عضویت</a>
                    </li>
                    @endguest
                    <li>
                        <a href="/offer" class="offer-link"><i class="uil uil-gift"></i>تخفیفات</a>
                    </li>
                    <li>
                        <a href="/faq" class="offer-link"><i class="uil uil-question-circle"></i>راهنما</a>
                    </li>
                    <li>
                        <x-wishlist-button-counter />
                    </li>
                    <x-user-profile-navigation/>
                </ul>
            </div>
        </div>
    </div>
    <div class="sub-header-group">
        <div class="sub-header">
            <div class="search__icon">
                <a href="" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>
            </div>
            <x-cart-button/>
            <nav class="navbar navbar-expand-lg navbar-light py-3">
                <div class="container-fluid">
                    <button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                        <ul class="navbar-nav main_nav align-self-stretch">
                            <li class="nav-item"><a href="/" class="nav-link @if(Route::currentRouteName() == 'index') active @endif" title="Home">{{ __('global.Home') }}</a></li>
                            <li class="nav-item"><a href="/newest" class="nav-link @if(Route::currentRouteName() == 'newest') active @endif new_item" title="New Products">{{ __('global.New Products') }}</a></li>
                            <li class="nav-item"><a href="/special" class="nav-link @if(Route::currentRouteName() == 'special') active @endif" title="Featured Products">{{ __('global.Featured Products') }}</a></li>
                            <li class="nav-item"><a href="/contact" class="nav-link @if(Route::currentRouteName() == 'contact') active @endif" title="Contact">{{ __('global.contact') }}</a></li>
                            <li class="nav-item"><a href="/about" class="nav-link @if(Route::currentRouteName() == 'about') active @endif" title="Contact">{{ __('global.about') }}</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="catey__icon">
                <a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i></a>
            </div>
            <div class="ui dropdown">
                <a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i><span class="cate__icon">دسته بندی</span></a>
            </div>


        </div>
    </div>
</header>

@push('js')
<script>
    $(document).ready(function() {
        let search = $('input[name=what]');
        search.on('change', function(e){
            e.preventDefault();
            window.location = window.location.origin + "/search/" + search.val()
        })
    });
</script>
@endpush