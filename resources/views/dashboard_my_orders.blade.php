@extends('layouts.main')

@section('wrapper')
    <x-breadcrumb :slug="'User Profile'"/>
    <x-app.user :user="$user" />
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="dashboard-right">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-title-tab">
                                        <h4><i class="uil uil-box"></i>My Orders</h4>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    @if($quotes)
                                        @foreach($quotes as $qoute)
                                            <x-profile.my-orders :quote="$qoute" :account="$user->account" />
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <x-app.navbar />
                </div>
            </div>
        </div>
    </div>
@stop
