@extends('layouts.main')

@section('wrapper')
        <x-offers-banner/>
        <x-categories-slider/>
        <x-products-featured-slider :lable="'global.best sellers'" :filter="'best'"/>
        <x-best-offers/>
        <x-products-featured-slider :lable="'global.Cheap auction'" :filter="'cheap'"/>
        <x-products-featured-slider :lable="'global.newest'" :filter="'newest'" />
@stop
