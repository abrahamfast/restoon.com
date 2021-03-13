    <div class="bs-canvas bs-canvas-right position-fixed bg-cart h-100">
        <div class="bs-canvas-header side-cart-header p-3 ">
            <div class="d-inline-block  main-cart-title">{{ __('global.Filters') }}</div>
            <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
        </div>
        <div class="bs-canvas-body filter-body">
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>{{ __('global.Categories') }}</h4>
                </div>
                <div class="filter-item-body scrollstyle_4">
                    <div class="cart-radio">
                        <ul class="cte-select">
                            <li>
                                <input type="radio" id="c1" name="category" checked="" value="all">
                                <label for="c1">{{ __('global.all category') }}</label>
                            </li>
                            @if($categories)
                                @foreach($categories as $category)
                                    <li>
                                        <input type="radio" id="{{$category->id}}" name="category" value="{{$category->id}}">
                                        <label for="{{$category->id}}">{{$category->translate}}</label>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>{{ __('global.Price') }}</h4>
                </div>
                <div class="filter-item-body scrollstyle_4">
                    <div class="cart-radio">
                        <ul class="cte-select">
                            <li>
                                <input type="radio" id="c1" name="price" checked="" value="up20">
                                <label for="c1">کمتر از ۲۰ هزار  تومان </label>
                            </li>
                            <li>
                                <input type="radio" id="c2" name="price" value="up30">
                                <label for="c2">بین ۲۰ هزار تومان تا ۵۰ هزار تومان </label>
                            </li>
                            <li>
                                <input type="radio" id="c3" name="price" value="up40">
                                <label for="c3">۱۰۰ هزار تومان تا ۵۰۰ هزار تومان </label>
                            </li>
                            <li>
                                <input type="radio" id="c4" name="price" value="up50">
                                <label for="c4">۱ می لیون تا ۲ میلیون </label>
                            </li>
                            <li>
                                <input type="radio" id="c5" name="price" value="up60">
                                <label for="c5">بیش از ۲ میلیون تومان</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>{{ __('global.Discount filter') }}</h4>
                </div>
                <div class="filter-item-body scrollstyle_4">
                    <div class="cart-radio">
                        <ul class="cte-select">
                            <li>
                                <input type="radio" id="d1" name="offer" checked="" value="offer_1">
                                <label for="d1">۲ درصد - ۵ درصد </label>
                            </li>
                            <li>
                                <input type="radio" id="d2" name="offer" checked="" value="offer_2">
                                <label for="d2">۶ درصد - ۱۰ درصد </label>
                            </li>
                            <li>
                                <input type="radio" id="d3" name="offer" checked="" value="offer_3">
                                <label for="d3">۱۱ درصد - ۱۵ درصد </label>
                            </li>
                            <li>
                                <input type="radio" id="d4" name="offer" checked="" value="offer_4">
                                <label for="d4">۱۶ درصد - ۲۵ درصد </label>
                            </li>
                            <li>
                                <input type="radio" id="d4" name="offer" checked="" value="offer_5">
                                <label for="d5">۲۶ درصد - ۵۰ درصد </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>{{ __('global.Discount filter') }}</h4>
                </div>
                <div class="filter-item-body scrollstyle_4">
                    <div class="cart-radio">
                        <ul class="cte-select">
                            @foreach($brands as $brand)
                            <li>
                                <input type="radio" id="{{ $brand->id }}" name="brand" checked="" value="{{ $brand->id }}">
                                <label for="{{ $brand->id }}">۲ درصد - ۵ درصد </label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@push('js')
    <script>
        $(document).ready(function() {
            $('input[name=category]').change(function(){
                let route = window.location.origin + window.location.pathname + "/?options=category," + this.value;
                window.location = route;
            });
            $('input[name=price]').change(function(){
                let route = window.location.origin + window.location.pathname + "/?options=price," + this.value;
                window.location = route;
            });
            $('input[name=offer]').change(function(){
                let route = window.location.origin + window.location.pathname + "/?options=offer," + this.value;
                window.location = route;
            });
            $('input[name=brand]').change(function(){
                let route = window.location.origin + window.location.pathname + "/?options=brand=" + this.value;
                window.location = route;
            });
        });
    </script>
@endpush