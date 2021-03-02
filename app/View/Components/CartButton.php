<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Auth;

class CartButton extends Component
{
    public $cartCount;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $user = Auth::user();
        if($user){
            $quote = $user->quote()->where('status', 'In Review')->first();
            $this->cartCount = $quote->items()->count();    
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cart-button');
    }
}
