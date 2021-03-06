@extends('layouts.main')

@section('wrapper')

        <div class="default-dt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="default_tabs">
                            <nav>
                                <div class="nav nav-tabs tab_default  justify-content-center">
                                    <a class="nav-item nav-link active" href="/about">{{ __('global.About') }}</a>
                                    <a class="nav-item nav-link" href="/contact">{{ __('global.Contact') }}</a>
                                </div>
                            </nav>
                        </div>
                        <div class="title129">
                            <h2>{{ __('global.About Us') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="life-gambo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="default-title left-text">
                            <h2>{{ __('global.About Restoon') }}</h2>
                            <p>{{ __('global.Customers Deserve Better') }}</p>
                            <img src="/images/line.svg" alt="">
                        </div>
                        <div class="about-content">
                            <p>رستون به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی به سه اصل، پرداخت در محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا موفق شده تا همگام با فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به سایت رستون با دنیایی از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.
</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="/images/about.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-steps-group white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="about-step">
                            <div class="about-step-img">
                                <img src="/images/about/icon-1.svg" alt="">
                            </div>
                            <h4>+۴۰۰</h4>
                            <p>{{ __('global.People have joined the restoon team in the past six months') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about-step">
                            <div class="about-step-img">
                                <img src="images/about/icon-2.svg" alt="">
                            </div>
                            <h4>۲ برابر</h4>
                            <p>{{ __('global.Rate of growth in our monthly user base') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about-step">
                            <div class="about-step-img">
                                <img src="/images/about/icon-3.svg" alt="">
                            </div>
                            <h4>۱۰ روزه</h4>
                            <p>{{ __('global.Time taken to launch in 8 cities across India') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about-step">
                            <div class="about-step-img">
                                <img src="/images/about/icon-4.svg" alt="">
                            </div>
                            <h4>۹۲۹ کاربر</h4>
                            <p>{{ __('global.App downloads on iOS and Android') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="life-gambo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="default-title">
                            <h2>{{ __('global.Our Team') }}</h2>
                            <p>{{ __('global.Teamwork Makes the Dream Work') }}</p>
                            <img src="images/line.svg" alt="">
                        </div>
                        <div class="dd-content">
                            <div class="owl-carousel team-slider owl-theme">
                                <div class="item">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="/images/team/img-1.jpg" alt="">
                                        </div>
                                        <h4>بهروز</h4>
                                        <span>CEO & Co-Founder</span>
                                        <ul class="team-social">
                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="/images/team/img-1.jpg" alt="">
                                        </div>
                                        <h4>بهروز</h4>
                                        <span>CEO & Co-Founder</span>
                                        <ul class="team-social">
                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="/images/team/img-1.jpg" alt="">
                                        </div>
                                        <h4>بهروز</h4>
                                        <span>CEO & Co-Founder</span>
                                        <ul class="team-social">
                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="/images/team/img-1.jpg" alt="">
                                        </div>
                                        <h4>بهروز</h4>
                                        <span>CEO & Co-Founder</span>
                                        <ul class="team-social">
                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-order-gambo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="default-title">
                            <h2>{{ __('global.How Do I Order') }}</h2>
                            <p>{{ __('global.How Do I order on restoon') }}</p>
                            <img src="/images/line.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-search"></i>
                            </div>
                            <h4>{{ __('global.Browse restoon.com for products or use the search feature') }}</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-shopping-basket"></i>
                            </div>
                            <h4>{{ __('global.Add item to your shopping Basket') }}</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-stopwatch"></i>
                            </div>
                            <h4>{{ __('global.Choose a convenient delivery time from our 5 Slots* a day') }}</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-money-bill"></i>
                            </div>
                            <h4>{{ __('global.Select suitable payment option(Cash, Master, Credit Card, Discover)') }}</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-truck"></i>
                            </div>
                            <h4>{{ __('global.Your products will be home-delivered as per your order') }}</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-smile"></i>
                            </div>
                            <h4>{{ __('global.Happy Curstomers') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop