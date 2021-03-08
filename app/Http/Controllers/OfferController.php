<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    public function show($id)
    {
    	$offer = Offer::where('id', $id)->first();

    	return view('product', [
    		'products' => $offer->product()->get(),
    		'slug' => $offer->name
    	]);
    }

    public function index()
    {
    	$offers = Offer::where('layout', 'discount')->where('deleted', 0)->get();

    	return view('offer', [
    		'offers' => $offers,
    		'slug' => 'global.Offers Head'
    	]);
    }
}
