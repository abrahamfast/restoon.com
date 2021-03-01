                        <div class="col-lg-3 col-md-6">
                            <div class="product-item mb-30">
                                <a href="/product/{{ $product->id }}" class="product-img">
                                    <img src="/dataloader/{{ $product->getCover() }}" alt="">
                                    <div class="product-absolute-options">
                                        @if($product->discount)
                                            <span class="offer-badge-1">{{ $product->discount }}% تخفیف</span>
                                        @endif
                                        <span class="like-icon" title="wishlist" data-product-id="{{ $product->id }}"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    @if($product->status == 'Available')
                                        <p>موجود<span>(در انبار)</span></p>
                                    @else
                                        <p>ناموجود</p>
                                    @endif
                                    <h4>{{ $product->name }}</h4>
                                    @if($product->discount)
                                        <div class="product-price">{{ $product->discount_price }} <span>{{ $product->cost_price }}</span></div>
                                    @else
                                        <div class="product-price">{{ $product->cost_price }}</div>
                                    @endif
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <form action="/cart/add" method="POST">
                                                @csrf
                                                <input type="hidden" name="product-id" value="{{ $product->id }}">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </form>
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt addcart" data-product-id="{{ $product->id }}"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>