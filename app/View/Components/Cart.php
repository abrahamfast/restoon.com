<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Quote;
use Auth;

class Cart extends Component
{
    public $quote;
    public $quote_items;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $user = Auth::user();
        if($user){
            $this->quote = $user->quote()->where('status', 'Draft')->first();
            $this->quote_items = $this->quote->items()->get();
        } else {
            $quoteId = session()->get('quoteId');
            if($quoteId){
                $this->quote = Quote::where('id', $quoteId)->first();
                $this->quote_items = $this->quote->items()->get();    
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
        return view('components.cart');
    }
}
