<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function send(Request $request)
    {
    	// send otp
    	return redirect()->back();
    }

    public function check(Request $request)
    {
    	// check otp code
    	return redirect()->back();
    }
}
