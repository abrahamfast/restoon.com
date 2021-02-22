        <div class="section145">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title-tt">
                            <div class="main-title-left">
                                <span>{{ __('global.for you') }}</span>
                                <h2>{{ __('global.Top Featured Products') }}</h2>
                            </div>
                            <a href="#" class="see-more-btn">{{ __('global.See All') }}</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel featured-slider owl-theme">
                            @if($products)
					    		@foreach($products as $product)
					    			<x-single-product-featured-slider  :product="$product" />
					    		@endforeach
					    	@endif
                        </div>
                    </div>
                </div>
            </div>
        </div>