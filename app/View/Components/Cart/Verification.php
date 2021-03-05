<?php

namespace App\View\Components\Cart;

use Illuminate\View\Component;

class Verification extends Component
{
    public $verify;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($verify)
    {
        $this->verify = $verify;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cart.verification');
    }
}
