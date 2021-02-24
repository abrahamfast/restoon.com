        <div class="main-banner-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel offers-banner owl-theme">
                        	@if($banners)
	                        	@foreach($banners as $banner)
		                            <div class="item">
		                                <div class="offer-item">
		                                    <div class="offer-item-img">
		                                        <div class="gambo-overlay"></div>
		                                        <img src="/dataloader/{{ $banner->cover_id }}" alt="">
		                                    </div>
		                                    <div class="offer-text-dt">
		                                        <div class="offer-top-text-banner">
		                                            <p>{{ $banner->off_banner }}٪ تخفیف</p>
		                                            {{-- <div class="top-text-1">Buy More & Save More</div> --}}
		                                            <span>{{ $banner->name }}</span>
		                                        </div>
		                                        <a href="/offer/{{ $banner->id }}" class="Offer-shop-btn hover-btn">{{ __('global.Shop Now') }}</a>
		                                    </div>
		                                </div>
		                            </div>
	                            @endforeach
                            @else
                            <div class="item">
                                <div class="offer-item">
                                    <div class="offer-item-img">
                                        <div class="gambo-overlay"></div>
                                        <img src="images/banners/offer-2.jpg" alt="">
                                    </div>
                                    <div class="offer-text-dt">
                                        <div class="offer-top-text-banner">
                                            <p>5% Off</p>
                                            <div class="top-text-1">Buy More & Save More</div>
                                            <span>Fresh Fruits</span>
                                        </div>
                                        <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="offer-item">
                                    <div class="offer-item-img">
                                        <div class="gambo-overlay"></div>
                                        <img src="images/banners/offer-3.jpg" alt="">
                                    </div>
                                    <div class="offer-text-dt">
                                        <div class="offer-top-text-banner">
                                            <p>3% Off</p>
                                            <div class="top-text-1">Hot Deals on New Items</div>
                                            <span>Daily Essentials Eggs & Dairy</span>
                                        </div>
                                        <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="offer-item">
                                    <div class="offer-item-img">
                                        <div class="gambo-overlay"></div>
                                        <img src="images/banners/offer-4.jpg" alt="">
                                    </div>
                                    <div class="offer-text-dt">
                                        <div class="offer-top-text-banner">
                                            <p>2% Off</p>
                                            <div class="top-text-1">Buy More & Save More</div>
                                            <span>Beverages</span>
                                        </div>
                                        <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="offer-item">
                                    <div class="offer-item-img">
                                        <div class="gambo-overlay"></div>
                                        <img src="images/banners/offer-5.jpg" alt="">
                                    </div>
                                    <div class="offer-text-dt">
                                        <div class="offer-top-text-banner">
                                            <p>3% Off</p>
                                            <div class="top-text-1">Buy More & Save More</div>
                                            <span>Nuts & Snacks</span>
                                        </div>
                                        <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>