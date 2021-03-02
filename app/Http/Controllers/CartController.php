<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\QuoteItem;

class CartController extends Controller
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

    public function unlink($id)
    {
        QuoteItem::where('id', $id)->delete();

        return redirect()->back();
    }

    public function link(Request $request)
    {
        $user = $request->user();

        if($user){
            // get Presented or 
            // @TODO check just one 
            // confuse more than 1 quote
            $quote = $user->quote()->where('status', 'In Review')->first();
            // get product
            $product = Product::where('id', $request->get('product-id'))->first();
            QuoteItem::create([
                'id' => uniqid() . substr(md5(rand()), 0, 4),
                'quantity' => $request->get('quantity'),
                'list_price' => $product->list_price,
                'unit_price' => $product->unit_price,
                'discount' => $product->getDiscount(),
                'amount' => $product->getAmount(),
                'unit_weight' => '1',
                'weight' => $request->get('quantity'),
                'order' => $quote->items()->count() + 1,
                'list_price_currency' => 'IRR',
                'unit_price_currency' => 'IRR',
                'amount_currency' => 'IRR',
                'quote_id' => $quote->id,
                'account_id' => $user->account_id,
                'product_id' => $product->id,
            ]);

        }
        

        // check exists qoute
        // create or update qoute
        // check items exists
        // added items into qoute
        // status qoute to open

        return redirect()->back();
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
