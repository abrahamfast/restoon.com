<header class="header clearfix">
    <div class="top-header-group">
        <div class="top-header">
            <div class="res_main_logo">
                <a href="#"><img src="/images/dark-logo-1.png" alt=""></a>
            </div>
            <div class="main_logo" id="logo">
                <a href="#"><img src="/images/logo.png" alt=""></a>
                <a href="#"><img class="logo-inverse" src="images/dark-logo.png" alt=""></a>
            </div>
            <x-select-location/>
            <div class="search120">
                <div class="ui search">
                    <div class="ui left icon input swdh10">
                        <input class="prompt srch10" type="text" placeholder="Search for products..">
                        <i class='uil uil-search-alt icon icon1'></i>
                    </div>
                </div>
            </div>
            <div class="header_right">
                <ul>
                    <li>
                        <a href="tel:02122222222" class="offer-link"><i class="uil uil-phone-alt"></i>۰۲۱۳۳۳۳۳۹۳</a>
                    </li>
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
            <div class="ui dropdown">
                <a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i><span class="cate__icon">دسته بندی</span></a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light py-3">
                <div class="container-fluid">
                    <button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                        <ul class="navbar-nav main_nav align-self-stretch">
                            <li class="nav-item"><a href="/" class="nav-link active" title="Home">{{ __('global.Home') }}</a></li>
                            <li class="nav-item"><a href="/product/newest" class="nav-link new_item" title="New Products">{{ __('global.New Products') }}</a></li>
                            <li class="nav-item"><a href="/product/top" class="nav-link" title="Featured Products">{{ __('global.Featured Products') }}</a></li>
                            <li class="nav-item"><a href="/contact" class="nav-link" title="Contact">{{ __('global.contact') }}</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="catey__icon">
                <a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i></a>
            </div>

            <x-cart-button/>

            <div class="search__icon order-1">
                <a href="" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>
            </div>
        </div>
    </div>
</header>