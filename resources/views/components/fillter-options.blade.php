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
                    <h4>{{ __('global.Discount filter') }}</h4>
                </div>
                <div class="filter-item-body scrollstyle_4">
                    <div class="cart-radio">
                        <ul class="cte-select">
                            @foreach($brands as $brand)
                            <li>
                                <input type="radio" id="{{ $brand->id }}" name="brand" checked="" value="{{ $brand->id }}">
                                <label for="{{ $brand->id }}">{{ $brand->name }}</label>
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