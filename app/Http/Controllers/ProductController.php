<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategories;
use App\Traits\{ProductFilter, FilterOptions};

class ProductController extends Controller
{
    use ProductFilter, FilterOptions;

    protected array $options = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug, Request $request)
    {
        // get categories by slug
        $category = ProductCategories::where('slug', $slug)->first();
        $query = Product::where('category_id', $category->id);
        $type = $request->get('filter') ?? 3;
        $products = $this->filter($type, $query)->get();
        

        return view('product', [
            'products' => $products,
            'slug' => $category->translate,
            'filter' => $type
        ]);
    }

    public function newest(Request $request)
    {
        $query = Product::where('dseleted', 0);
        $type = $request->get('filter') ?? 3;
        // option filters
        $option = $request->get('options') ?? null;
        // @TODO here has dev mode
        $this->makeOptionQuery($option);
        $query = $this->optionQuery($query);

        //
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
        $type = $request->get('filter') ?? 3;
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
