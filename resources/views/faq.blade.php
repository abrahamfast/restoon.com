@extends('layouts.main')

@section('wrapper')
<x-breadcrumb :slug="$slug"/>
	
	<div class="all-product-grid">	
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="default-title mt-4">
                            <h2>{{ __('global.Frequently Asked Questions') }}</h2>
                            <img src="/images/line.svg" alt="">
                        </div>
                        @if($faqs)
	                        @foreach($faqs as $faq)
	                        <div class="panel-group accordion pt-1" id="accordion{{$faq->id}}">
	                            <div class="panel panel-default">
	                                <div class="panel-heading" id="heading{{$faq->id}}">
	                                    <div class="panel-title">
	                                        <a class="collapsed"
	                                         data-toggle="collapse" 
	                                         data-target="#collapse{{$faq->id}}" href="#" 
	                                         aria-expanded="false" aria-controls="collapse{{$faq->id}}">{{$faq->name}}</a>
	                                    </div>
	                                </div>
	                                <div id="collapse{{$faq->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$faq->id}}" data-parent="#accordion{{$faq->id}}" style="">
	                                    <div class="panel-body">
	                                        {{$faq->body}}
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        @endif
                        @endif
                    </div>
                </div>
            </div>

	</div>
@stop