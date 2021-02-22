<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;

class ProductsFeaturedSlider extends Component
{
    public $products;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->products = Product::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.products-featured-slider');
    }
}
