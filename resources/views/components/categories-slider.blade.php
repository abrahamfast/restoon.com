        <div class="section145">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title-tt">
                            <div class="main-title-right">
                                <span>{{ __('global.Shop By') }}</span>
                                <h2>{{ __('global.Categories') }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel cate-slider owl-theme">
                        	@if($categories)
	                        	@foreach($categories as $category)
		                            <div class="item">
		                                <a href="/category/{{$category->slug}}" class="category-item">
		                                    <div class="cate-img">
		                                        <img src="/dataloader/{{$category->cover_id}}" alt="">
		                                    </div>
		                                    <h4>{{ $category->translate }}</h4>
		                                </a>
		                            </div>
	                            @endforeach
                        	@else
                            <div class="item">
                                <a href="#" class="category-item">
                                    <div class="cate-img">
                                        <img src="images/category/icon-1.svg" alt="">
                                    </div>
                                    <h4>Vegetables & Fruits</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="category-item">
                                    <div class="cate-img">
                                        <img src="images/category/icon-2.svg" alt="">
                                    </div>
                                    <h4> Grocery & Staples </h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="category-item">
                                    <div class="cate-img">
                                        <img src="images/category/icon-3.svg" alt="">
                                    </div>
                                    <h4> Dairy & Eggs </h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="category-item">
                                    <div class="cate-img">
                                        <img src="images/category/icon-4.svg" alt="">
                                    </div>
                                    <h4> Beverages </h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="category-item">
                                    <div class="cate-img">
                                        <img src="images/category/icon-5.svg" alt="">
                                    </div>
                                    <h4> Snacks </h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="category-item">
                                    <div class="cate-img">
                                        <img src="images/category/icon-6.svg" alt="">
                                    </div>
                                    <h4> Home Care </h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="category-item">
                                    <div class="cate-img">
                                        <img src="images/category/icon-7.svg" alt="">
                                    </div>
                                    <h4> Noodles & Sauces </h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="category-item">
                                    <div class="cate-img">
                                        <img src="images/category/icon-8.svg" alt="">
                                    </div>
                                    <h4> Personal Care </h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="category-item">
                                    <div class="cate-img">
                                        <img src="images/category/icon-9.svg" alt="">
                                    </div>
                                    <h4> Pet Care </h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="category-item">
                                    <div class="cate-img">
                                        <img src="images/category/icon-10.svg" alt="">
                                    </div>
                                    <h4> Meat & Seafood </h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="category-item">
                                    <div class="cate-img">
                                        <img src="images/category/icon-11.svg" alt="">
                                    </div>
                                    <h4> Electronics </h4>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>