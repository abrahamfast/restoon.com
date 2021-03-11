<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quote;

class BillController extends Controller
{
    public function index($id, Request $request)
    {
    	$quote = Quote::where('id', $id)->first();

    	return view('profile.bill', [
    		'quote' => $quote,
    		'user' => $request->user()
    	]);
    }
}
