<div class="section145">
    <div class="container">
        <div class="row">
        	@if($offers)
	        	@foreach($offers as $offer)
	            	<x-offer-item :offer="$offer" />
	            @endforeach
            @endif
        </div>
    </div>
</div>