<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;
use App\Traits\ProductFilter;

class ProductsFeaturedSlider extends Component
{
    use ProductFilter;
    public $products;
    public $lable;
    public $filter;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($lable, $filter = null)
    {
        $query = Product::where('deleted', 0);
        if($filter){
            $query = $this->whereType($filter, $query);
        }
        $this->products = $query->limit(8)->get();
        $this->lable = __($lable);
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
