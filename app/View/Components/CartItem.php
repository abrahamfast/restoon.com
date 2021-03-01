<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Auth;

class CartItem extends Component
{
    public $quote_item;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($quote_item)
    {
        $this->quote_item = $quote_item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cart-item');
    }
}
