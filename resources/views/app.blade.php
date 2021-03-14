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
                                <x-app.overview :user="$user"/>
                                @break
                            @case('wishlist')
                                <x-app.wishlist :wishlist="$wishlist"/>
                                @break
                            @case('orders')
                                <x-profile.order.index :user="$user"/>
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
