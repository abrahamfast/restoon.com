                                <div class="col-lg-4 col-md-4">
                                	@if($covers)
	                                	<div id="sync1" class="owl-carousel owl-theme">
	                                		@foreach($covers as $cover)
		                                		<div id="sync1" class="owl-carousel owl-theme">
		                                        <div class="item">
		                                            <img src="/dataloader/{{$cover->id}}" alt="">
		                                        </div>
	                                		@endforeach
	                                	</div>
										<div id="sync2" class="owl-carousel owl-theme">
	                                		@foreach($covers as $cover)
		                                		<div id="sync1" class="owl-carousel owl-theme">
		                                        <div class="item">
		                                            <img src="/dataloader/{{$cover->id}}" alt="">
		                                        </div>
	                                		@endforeach
	                                	</div>
                                	@else
	                                    <div id="sync1" class="owl-carousel owl-theme">
	                                        <div class="item">
	                                            <img src="images/product/big-1.jpg" alt="">
	                                        </div>
	                                        <div class="item">
	                                            <img src="images/product/big-2.jpg" alt="">
	                                        </div>
	                                        <div class="item">
	                                            <img src="images/product/big-3.jpg" alt="">
	                                        </div>
	                                        <div class="item">
	                                            <img src="images/product/big-4.jpg" alt="">
	                                        </div>
	                                    </div>
	                                    <div id="sync2" class="owl-carousel owl-theme">
	                                        <div class="item">
	                                            <img src="images/product/big-1.jpg" alt="">
	                                        </div>
	                                        <div class="item">
	                                            <img src="images/product/big-2.jpg" alt="">
	                                        </div>
	                                        <div class="item">
	                                            <img src="images/product/big-3.jpg" alt="">
	                                        </div>
	                                        <div class="item">
	                                            <img src="images/product/big-4.jpg" alt="">
	                                        </div>
	                                    </div>
                                    @endif
                                </div>