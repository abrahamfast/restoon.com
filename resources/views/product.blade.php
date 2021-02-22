@extends('layouts.main')

@section('wrapper')

<div class="all-product-grid">
	<x-breadcrumb :slug="$slug"/>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
				<x-filter-top />
			</div>
		</div>
	    <div class="wrapper">
			<div class="product-list-view">
			    <div class="row">
			    	@if($products)
			    		@foreach($products as $product)
			    			<x-product-list  :product="$product" />
			    		@endforeach
			    	@endif
			    </div>
			</div>
	    </div>
	</div>
</div>
@stop