<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function index($what)
    {
    	// search in products name
    	$products = Product::where('name', 'LIKE', "%{$what}%")->get();

        return view('product', [
            'products' => $products,
            'slug' => __('global.search')
        ]);
    }
}
