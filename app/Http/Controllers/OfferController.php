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
    		'offer' => $offer->product()->get(),
    		'slug' => $offer->name
    	]);
    }
}
