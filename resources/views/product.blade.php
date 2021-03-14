@extends('layouts.main')

@section('components')
	<x-fillter-options/>
@stop

@section('wrapper')
<x-breadcrumb :slug="$slug"/>
<div class="all-product-grid">	
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
				<x-filter-top :lable="$slug" :type="$filter"/>
			</div>
		</div>
	    <div class="wrapper" style="padding-top: 10px !important">
			<div class="product-list-view">
			    <div class="row" style="direction: rtl !important;">
			    	@if($products->count())
			    		@foreach($products as $product)
			    			<x-product-list  :product="$product" />
			    		@endforeach
			    	@else
			    		<div class="col-lg-12 col-md-12">
	                        <div class="default-title mt-4">
	                            <h2>{{ __('global.Not Founded') }}</h2>
	                            <img src="/images/line.svg" alt="">
	                        </div>
                    	</div>
			    	@endif
			    </div>
			</div>
	    </div>
	</div>
	<x-header-offer/>
</div>
@stop
