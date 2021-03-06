<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $quote = $request->user()->quote()->where('status', 'Draft')->first();
	if(!$quote){
		        $quoteId = session()->get('quoteId');
			$quote = \App\Models\Quote::where('id', $quoteId)->first();
	}
        $delivery_time = $request->get('delivery_time');
	$delivery_date = $request->get('delivery_date') . " " ;

        switch ($delivery_time) {
        	case '8_00AM_10_00AM':
        		$delivery_date .= "10:00:00";
        		break;
			case '10_00AM_12_00AM':
        		$delivery_date .= "12:00:00";
        		break;
			case '12_00AM_14_00PM':
        		$delivery_date .= "14:00:00";
        		break;
			case '14_00AM_16_00PM':
        		$delivery_date .= "16:00:00";
        		break;
			case '16_00AM_18_00PM':
        		$delivery_date .= "16:00:00";
        		break;
        	
        	default:
				$delivery_date .= "10:00:00";
        		break;
        }
        return $quote->update([
        	'delivery_time' => $delivery_date
        ]);
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
