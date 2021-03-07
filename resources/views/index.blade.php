@extends('layouts.main')

@section('wrapper')
        <x-offers-banner/>
        <x-categories-slider/>
        <x-products-featured-slider :lable="'best sellers'" :type="'best'"/>
        <x-best-offers/>
        <x-products-featured-slider :lable="'Cheap auction'" :type="'cheap'"/>
        <x-products-featured-slider :lable="'newst'" :type="newest" />
@stop