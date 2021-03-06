<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Quote;
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
        $quoteId = session()->get('quoteId');
        if($user && !$quoteId){
            $quote = $user->quote()->where('status', 'Draft')->first();
            if($quote){
                $this->cartCount = $quote->items()->count();
            }
            
        } else {
            $quoteId = session()->get('quoteId');
            if($quoteId){
                $quote = Quote::where('id', $quoteId)->first();
                $this->cartCount = $quote->items()->count();    
            }
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
