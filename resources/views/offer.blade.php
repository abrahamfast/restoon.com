@extends('layouts.main')

@section('wrapper')
		<x-breadcrumb :slug="$slug"/>
		<div class="all-product-grid">	
            <div class="container">
                <div class="row">
					<div class="col-lg-12 col-md-12">
                        <div class="default-title mt-4">
                            <h2>{{ __('Offers Head') }}</h2>
                            <img src="/images/line.svg" alt="">
                        </div>
                        @if($offers)
                        	@foreach($offers as $offer)
                        	<div class="col-lg-4">
                        <a href="#" class="offers-item">
                            <div class="offer-img">
                                <img src="/dataloader/{{ $offer->cover_id}}" alt="">
                            </div>
                            <div class="offers-text">
                                <h4>📢 {{ $offer->name }}</h4>
                                <p>{{ $offer->description }}</p>
                            </div>
                        </a>
                    </div>
                        	@endforeach
                        @endif
                    </div>
                </div>
            </div>
		</div>

@stop
