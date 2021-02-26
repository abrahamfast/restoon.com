@extends('layouts.main')

@section('wrapper')
    <x-breadcrumb :slug="'User Profile'"/>
    <x-app.user />
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <x-app.navbar />
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="dashboard-right">
                        <x-app.{{$view}}/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
