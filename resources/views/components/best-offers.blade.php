        <div class="section145">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title-tt">
                            <div class="main-title-right">
                                <span>تخفیف</span>
                                <h2>پیشنهاد شگفت‌انگیز</h2>
                            </div>
                        </div>
                    </div>
                    @if($offers)
	                    @foreach($offers as $offer)
	                    @switch($offer->style)
	                    	@case('small')
	                    		<div class="col-lg-4 col-md-6">
	                    		@break
	                    	@case('medium')
	                    		<div class="col-lg-6 col-md-6">
	                    		@break
	                    	@case('large')
	                    		<div class="col-lg-12 col-md-6">
	                    		@break
	                    	@default
	                    		<div class="col-lg-4 col-md-6">
	                    @endswitch
		                        <a href="/offer/{{ $offer->id }}" class="best-offer-item">
		                            <img src="/dataloader/{{ $offer->cover_id }}" alt="">
		                        </a>
		                    </div>
	                    @endforeach
                    @else
                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="best-offer-item">
                            <img src="images/best-offers/offer-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="best-offer-item">
                            <img src="images/best-offers/offer-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="best-offer-item offr-none">
                            <img src="images/best-offers/offer-3.jpg" alt="">
                            <div class="cmtk_dt">
                                <div class="product_countdown-timer offer-counter-text" data-countdown="2021/01/22"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="#" class="code-offer-item">
                            <img src="images/best-offers/offer-4.jpg" alt="">
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>