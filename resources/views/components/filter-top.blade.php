<div class="product-top-dt">
    <div class="product-right-title">
        <h2>{{ $lable }}</h2>
    </div>    
    <div class="product-sort">
        <div class="ui selection dropdown vchrt-dropdown">
            <input name="filter" type="hidden" value="default">
            <i class="dropdown icon d-icon"></i>
            <div class="text">{{ __('global.Popularity') }}</div>
            <div class="menu">
                <div class="item" data-value="0">{{ __('global.Popularity') }}</div>
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
                window.location = "/special?filter=" + this.value
            });
        });
    </script>
@endpush