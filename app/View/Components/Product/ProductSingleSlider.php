<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;

class ProductSingleSlider extends Component
{

    public $covers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($covers)
    {
        $this->covers = $covers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.product-single-slider');
    }
}
