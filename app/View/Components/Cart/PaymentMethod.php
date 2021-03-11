<?php

namespace App\View\Components\Cart;

use Illuminate\View\Component;

class PaymentMethod extends Component
{
    public $quote;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($quote)
    {
        $this->quote = $quote;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cart.payment-method');
    }
}
