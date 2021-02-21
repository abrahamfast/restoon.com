<header class="header clearfix">
    <div class="top-header-group">
        <div class="top-header">
            <div class="res_main_logo">
                <a href="#"><img src="images/dark-logo-1.svg" alt=""></a>
            </div>
            <div class="main_logo" id="logo">
                <a href="#"><img src="images/logo.svg" alt=""></a>
                <a href="#"><img class="logo-inverse" src="images/dark-logo.svg" alt=""></a>
            </div>
            <div class="select_location">
                <div class="ui inline dropdown loc-title">
                    <div class="text">
                        <i class="uil uil-location-point"></i> Gurugram
                    </div>
                    <i class="uil uil-angle-down icon__14"></i>
                    <div class="menu dropdown_loc">
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i> Gurugram
                        </div>
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i> New Delhi
                        </div>
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i> Bangaluru
                        </div>
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i> Mumbai
                        </div>
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i> Hyderabad
                        </div>
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i> Kolkata
                        </div>
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i> Ludhiana
                        </div>
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i> Chandigrah
                        </div>
                    </div>
                </div>
            </div>
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
                        <a href="#" class="offer-link"><i class="uil uil-phone-alt"></i>1800-000-000</a>
                    </li>
                    <li>
                        <a href="#" class="offer-link"><i class="uil uil-gift"></i>Offers</a>
                    </li>
                    <li>
                        <a href="#" class="offer-link"><i class="uil uil-question-circle"></i>Help</a>
                    </li>
                    <li>
                        <a href="#" class="option_links" title="Wishlist"><i class='uil uil-heart icon_wishlist'></i><span class="noti_count1">3</span></a>
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
                            <li class="nav-item"><a href="#" class="nav-link active" title="Home">{{ __('global.Home') }}</a></li>
                            <li class="nav-item"><a href="#" class="nav-link new_item" title="New Products">{{ __('global.New Products') }}</a></li>
                            <li class="nav-item"><a href="#" class="nav-link" title="Featured Products">{{ __('global.Featured Products') }}</a></li>
                            <li class="nav-item"><a href="#" class="nav-link" title="Contact">{{ __('global.contact') }}</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="catey__icon">
                <a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i></a>
            </div>

            <x-cart-button/>

            <div class="search__icon order-1">
                <a href="#" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>
            </div>
        </div>
    </div>
</header>