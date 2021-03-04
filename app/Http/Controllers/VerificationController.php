<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function send(Request $request)
    {
    	// send otp
    	ddd($request);
    	
    	return redirect()->back();
    }
}
