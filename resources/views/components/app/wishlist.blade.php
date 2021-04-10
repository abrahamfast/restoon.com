<div class="row">
    <div class="col-md-12">
        <div class="main-title-tab">
            <h4><i class="uil uil-heart"></i>{{ __('global.Shopping Wishlist') }}</h4>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="pdpt-bg">
            <div class="wishlist-body-dtt">
                @if($wishlist->count())
                    @foreach($wishlist->get() as $item)
                    @php
                        $product = $item->product()->first();
                    @endphp
                        <div class="cart-item">
                            <div class="cart-product-img">
                                <img src="/dataloader/{{ $product->getCover() }}" alt="">
                                        @if($product->price_factor)
                                            <div class="offer-badge">{{ $item->discount}} % تخفیف</div>
                                        @endif
                            </div>
                            <div class="cart-text">
                                <h4>{{ $product->name  }}</h4>
                                @if($product->price_factor)
                                    <div class="cart-item-price">
                                         {{ __('global.toman', ["price" => $product->takeCurrencyAttr('unit_price') ]) }}
                                        <span>{{ __('global.toman', ["price" => $product->takeCurrencyAttr('list_price') ]) }}</span>
                                    </div>
                                @else
                                    <div class="cart-item-price">{{ __('global.toman', ["price" => $product->takeCurrencyAttr('list_price')]) }}</div>
                                @endif
                                <button data-action="unlink" type="button" data-product="{{ $product->id }}" class="cart-close-btn">
                                    <i class="uil uil-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        let btn = $('[data-action=unlink');
        btn.on('click', function(e){
            e.preventDefault();
            console.log($(this))
        });

    </script>
@endpush
