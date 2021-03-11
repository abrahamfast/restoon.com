@extends('layouts.layout-clear')

@section('wrapper')

<div class="bill-dt-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bill-detail">
                    	<x-profile.bill.items :items="$quote->items()" />
                    	<x-profile.bill.delivery-address :user="$user" />
                    	<x-profile.bill.payment :quote="$quote" />
                    	<x-profile.bill.delivery-details :quote="$quote" />
                        <div class="bill-dt-step">
                            <div class="bill-bottom">
                                <div class="thnk-ordr">{{ __('global.bill-ThanksforOrdering') }}</div>
                                <a class="print-btn hover-btn" href="javascript:window.print();">{{ __('global.bill-Print') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
