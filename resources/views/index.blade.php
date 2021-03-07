@extends('layouts.main')

@section('wrapper')
        <x-offers-banner/>
        <x-categories-slider/>
        <x-products-featured-slider :lable="'global.best sellers'" :type="'best'"/>
        <x-best-offers/>
        <x-products-featured-slider :lable="'global.Cheap auction'" :type="'cheap'"/>
        <x-products-featured-slider :lable="'global.newest'" :type="'newest'" />
@stop
