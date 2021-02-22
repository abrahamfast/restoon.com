@extends('layouts.main')

@section('components')
	<x-fillter-options/>
@stop

@section('wrapper')
		<x-breadcrumb :slug="$product->getCategory()" />

        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-dt-view">
                            <div class="row">
                            	<x-product-single-slider :covers="$product->attachment()->get()"/>
                            	<x-product-single-detail :product="$product"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<x-product-single-like-this/>
                	<x-product-single-detail-bottom :product="$product"/>
                </div>
            </div>
        </div>
@stop