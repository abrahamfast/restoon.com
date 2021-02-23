<div class="col-lg-8 col-md-8">
    <div class="product-dt-right">
        <h2>{{ $product->name }}</h2>
        <div class="no-stock">
            <p class="pd-no">کد محصولا: <span>{{ $product->partNumber }}</span></p>
            @if($product->status == 'Available')
                <p class="stock-qty">موجود<span>(در انبار)</span></p>
            @else
                <p class="stock-qty">ناموجود</p>
                <p>ناموجود</p>
            @endif
        </div>
        <div class="product-radio">
            <ul class="product-now">
                <li>
                    <input type="radio" id="p1" name="product1">
                    <label for="p1">500g</label>
                </li>
                <li>
                    <input type="radio" id="p2" name="product1">
                    <label for="p2">1kg</label>
                </li>
                <li>
                    <input type="radio" id="p3" name="product1">
                    <label for="p3">2kg</label>
                </li>
                <li>
                    <input type="radio" id="p4" name="product1">
                    <label for="p4">3kg</label>
                </li>
            </ul>
        </div>
        <p class="pp-descp">{{ $product->description }}</p>
        <div class="product-group-dt">
            @if($product->discount)
                                        <div class="product-price">{{ $product->discount_price }} <span>{{ $product->cost_price }}</span></div>
                                    @else
                                        <div class="product-price">{{ $product->cost_price }}</div>
                                    @endif

            <ul>
                @if($product->discount)
                    <li>
                        <div class="main-price color-discount">Discount Price<span>{{ $product->discount_price }}</span></div>
                    </li>
                    <li>
                        <div class="main-price mrp-price">MRP Price<span>{{ $product->cost_price }}</span></div>
                    </li>
                @else
                    <li>
                        <div class="main-price color-discount">قیمت: <span>$15</span></div>
                    </li>
                @endif
            </ul>
            <ul class="gty-wish-share">
                <li>
                    <div class="qty-product">
                        <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus minus-btn">
                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                            <input type="button" value="+" class="plus plus-btn">
                        </div>
                    </div>
                </li>
                <li><span class="like-icon save-icon" title="wishlist"></span></li>
            </ul>
            <ul class="ordr-crt-share">
                <li><button class="add-cart-btn hover-btn"><i class="uil uil-shopping-cart-alt"></i>Add to Cart</button></li>
                <li><button class="order-btn hover-btn">Order Now</button></li>
            </ul>
        </div>
        <div class="pdp-details">
            <ul>
                <li>
                    <div class="pdp-group-dt">
                        <div class="pdp-icon"><i class="uil uil-usd-circle"></i></div>
                        <div class="pdp-text-dt">
                            <span>Lowest Price Guaranteed</span>
                            <p>Get difference refunded if you find it cheaper anywhere else.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="pdp-group-dt">
                        <div class="pdp-icon"><i class="uil uil-cloud-redo"></i></div>
                        <div class="pdp-text-dt">
                            <span>Easy Returns & Refunds</span>
                            <p>Return products at doorstep and get refund in seconds.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>