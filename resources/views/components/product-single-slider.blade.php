<div class="col-lg-4 col-md-4">
	@if($covers)
    	<div id="sync1" class="owl-carousel owl-theme">
    		@foreach($covers as $cover)
                <div class="item">
                    <img src="/dataloader/{{$cover->id}}" alt="">
                </div>
    		@endforeach
    	</div>
		<div id="sync2" class="owl-carousel owl-theme">
    		@foreach($covers as $cover)
                <div class="item">
                    <img src="/dataloader/{{$cover->id}}" alt="">
                </div>
    		@endforeach
    	</div>
    @endif
</div>