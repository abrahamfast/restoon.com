@extends('layouts.main')

@section('wrapper')
    <x-breadcrumb :slug="$slug ?? 'global.overview'"/>
    <x-app.user :user="$user" />
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="dashboard-right">
                        @switch($view)
                            @case('overview')
                                <x-app.overview :user="$user"></x-app.overview>
                                @break
                            @case('wishlist')
                                <x-app.wishlist :wishlist="$wishlist"></x-app.wishlist>
                                @break
                            @case('orders')
                                <x-profile.order.index :user="$user"></x-profile.order.index>
                                @break
                            @case('addresses')
                                <x-profile.addresses.index :user="$user"></x-profile.addresses.index>
                                @break
                           @default
                            @break
                        @endswitch

                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <x-app.navbar />
                </div>
            </div>
        </div>
    </div>
@stop
