<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    public function show($id)
    {
    	$offer = Offer::where('id', $id)->get();

    	return view('product', [
    		'offer' => $offer,
    		'slug' => $offer->name
    	]);
    }
}
