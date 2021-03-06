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
                <div class="offer-item-body scrollstyle_4">
                    <div class="brand-list">
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="offer_1">
                            <label class="custom-control-label" for="offer_1">2% - 5% <span class="webproduct"></span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="offer_2">
                            <label class="custom-control-label" for="offer_2">6% - 10% <span class="webproduct"></span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="offer_3">
                            <label class="custom-control-label" for="offer_3">11% - 15% <span class="webproduct"></span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="offer_4">
                            <label class="custom-control-label" for="offer_4">16% - 25% <span class="webproduct"></span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>{{ __('global.Pack Size') }}</h4>
                </div>
                <div class="price-pack-item-body scrollstyle_4">
                    <div class="brand-list">
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_1">
                            <label class="custom-control-label" for="pack_1">۱ عدد</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_2">
                            <label class="custom-control-label" for="pack_2">یک عدد ۴۰۰ الی ۶۰۰ گرم</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_3">
                            <label class="custom-control-label" for="pack_3">یک عدد ۶۰۰ الی ۸۰۰ گرم</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_4">
                            <label class="custom-control-label" for="pack_4">دسته  ۳ تایی</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_5">
                            <label class="custom-control-label" for="pack_5">دسته  ۴ تایی</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_6">
                            <label class="custom-control-label" for="pack_6">دسته  ۵ تایی</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_7">
                            <label class="custom-control-label" for="pack_7">۲ عدد</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_8">
                            <label class="custom-control-label" for="pack_8">۱۰۰ گرم</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_9">
                            <label class="custom-control-label" for="pack_9">۲۰۰ گرم</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_10">
                            <label class="custom-control-label" for="pack_10">۲۵۰ گرم</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_11">
                            <label class="custom-control-label" for="pack_11">۵۰۰ گرم</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_12">
                            <label class="custom-control-label" for="pack_12">یک گیلو</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_13">
                            <label class="custom-control-label" for="pack_13">دو گیلو</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_14">
                            <label class="custom-control-label" for="pack_14">۱ تن</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@push('js')
    <script>
        $(document).ready(function() {
            $('input[name=category]').change(function(){
                let route = window.location.origin + window.location.pathname + "/?filter=true&category=" + this.value;
                window.location = route;
            });
        });
    </script>
@endpush