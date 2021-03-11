<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product, Quote, QuoteItem};
use App\Traits\QuoteHandler;
use App\Traits\QuoteCalculator;

class CartController extends Controller
{
    use QuoteHandler, QuoteCalculator;

    protected $product;
    protected $qoute;
    protected $qouteId;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function unlink($id)
    {
        QuoteItem::where('id', $id)->delete();

        return redirect()->back();
    }

    public function link(Request $request)
    {
        $user = $request->user();
        $productId = $request->get('product-id');
        $quantity = $request->get('quantity');

        if($this->getSessionQuote()) {
            $this->setQuote();
        } else if ($user) {
            $this->userQuote($user);
        } else {
            $this->newQuote();
        }

        $this->product($productId);
        $this->addItem(
            $quantity,
            $user ? $user->account_id : ''
        );

        $this->performs();

        return redirect()->back();
    }


    public function final($id, Request $request)
    {
        $quote = Quote::where('id', $id)->first();
      //  $quote->assginSalesTeam();
        $user = $request->user();

        return view('success', [
            'slug' => __('Order Placed'),
            'quote' => $quote,
            'user' => $user
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
