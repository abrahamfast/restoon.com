@extends('layouts.main')

@section('wrapper')
        <x-offers-banner/>
        <x-categories-slider/>
        <x-products-featured-slider :where="top"/>
        <x-best-offers/>
        <x-products-featured-slider :where="top"/>
        <x-products-featured-slider :where="top"/>
@stop