                        <div class="col-lg-3 col-md-6">
                            <div class="product-item mb-30">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="/dataloader/{{ $product->getCover() }}" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">{{ $product->discount }}% تخفیف</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>{{ $product->name }}</h4>
                                    @if($product->cost_price)
                                        <div class="product-price">{{ $product->cost_price }}</div>
                                    @else
                                        <div class="product-price">{{ $product->discount_price }} <span>{{ $product->cost_price }}</span></div>
                                    @endif
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <form action="/cart/add"></form>
                                                <input type="hidden" value="{{ $product->id }}">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>