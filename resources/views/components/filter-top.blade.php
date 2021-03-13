<div class="product-top-dt">
    <div class="product-right-title">
        <h2>{{ $lable }}</h2>
    </div>    
    <div class="product-sort">
        <div class="ui selection dropdown vchrt-dropdown">
            <input name="filter" type="hidden" value="default">
            <i class="dropdown icon d-icon"></i>
            <div class="text">
                @switch($type)
                    @case(1)
                        {{ __('global.Price - Low to High') }}
                        @breack
                    @case(2)
                        {{ __('global.Price - High to Low') }}
                        @breack
                    @case(3)
                        {{ __('global.Alphabetical') }}
                        @breack
                    @case(6)
                        {{ __('global.Off - High to Low') }}
                        @breack
                    @default
                        {{ __('global.Alphabetical') }}
                        @breack
                @endswitch
            </div>
            <div class="menu">
                <div class="item" data-value="1">{{ __('global.Price - Low to High') }}</div>
                <div class="item" data-value="2">{{ __('global.Price - High to Low') }}</div>
                <div class="item" data-value="3">{{ __('global.Alphabetical') }}</div>
                <div class="item" data-value="6">{{ __('global.Off - High to Low') }}</div>
            </div>
        </div>
    </div>
    <a href="#" class="filter-btn pull-bs-canvas-right">{{ __('global.Filters') }}</a>
</div>

@push('js')
    <script>
        $(document).ready(function() {
            $('input[name=filter]').change(function(){
                let route = window.location.origin + window.location.pathname + "/?filter=" + this.value;
                window.location = route;
            });
        });
    </script>
@endpush