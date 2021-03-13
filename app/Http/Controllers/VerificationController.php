<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OtpService;

class VerificationController extends Controller
{
    public function send(Request $request)
    {
    	// send otp
    	return redirect()->back();
    }

    public function check(Request $request, OtpService $otpService)
    {
        $verify = $otpService->verifyOtp($request->user()->phone, str_replace("null", "", $request->get('code')));
        if($verify){
            session()->put('verify', true);
            return response('success', 200);
        }

        return response('invalid code', 500);
    }
}

