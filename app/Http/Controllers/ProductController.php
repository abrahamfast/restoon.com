<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategories;
use App\Traits\ProductFilter;

class ProductController extends Controller
{
    use ProductFilter;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        // get categories by slug
        $category = ProductCategories::where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)->get();

        return view('product', [
            'products' => $products,
            'slug' => $category->translate
        ]);
    }

    public function newest(Request $request)
    {
        $query = Product::where('deleted', 0);
        $type = $request->get('filter') ?? 0;
        $products = $this->filter($type, $query)->get();

        return view('product', [
            'products' => $products,
            'slug' => __('global.New Products'),
            'filter' => $type
        ]);
    }

    public function special(Request $request)
    {
        $query = Product::where('deleted', 0)->where('list_price', "<>", null);
        $type = $request->get('filter') ?? 0;
        $products = $this->filter($type, $query)->get();

        return view('product', [
            'products' => $products,
            'slug' => __('global.Featured Products'),
            'filter' => $type
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
        $product = Product::find($id);

        return view('single_product', [
            'product' => $product
        ]);
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
