<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\{Product, Quote, QuoteItem};
use App\Traits\QuoteHandler;
use App\Services\OtpService;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = $request->user()->quote()->get();

        return view('dashboard_my_orders', [
            'quotes' => $quotes
        ]);
    }

    public function checkout(Request $request, OtpService $otpService)
    {
        $quoteId = $request->get('quoteId');
        $quote = Quote::where('id', $quoteId)->first();
        $verify = session()->get('verify');
        if($verify){
            $otpService->setReceptor($request->user()->phone);
            $otpService->send();    
        }
        

        return view('checkout', [
            'slug' => __('checkout'),
            'quote' => $quote,
            'verify' => $verify
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
