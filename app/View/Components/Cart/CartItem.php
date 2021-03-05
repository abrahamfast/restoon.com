<?php

namespace App\View\Components\Cart;

use Illuminate\View\Component;

class CartItem extends Component
{
    public $product;

    /**
     * Create a new component instance.
     *
     * @param $product
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cart.cart-item');
    }
}
