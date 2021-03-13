<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Quote;
use Auth;

class Cart extends Component
{
    public $quote;
    public $quote_items;
    public $discount_amount;
    public $amount;
    public $tax_amount;
    public $total_amount;
    public $itemsCount;
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
            $quote = $user->quote()->where('id', $quoteId)->where('status', 'Draft')->first();
            if(!$quote) return false;
            $haveTeam = $quote->team()->count();
            if($quote && !$haveTeam){
                $this->quote = $quote;
                $this->quote_items = $this->quote->items()->where('deleted', 0)->get();
                $this->itemsCount  = $this->quote_items->count();
            }
        } else {
            $quoteId = session()->get('quoteId');
            if($quoteId){
                $quote = Quote::where('id', $quoteId)->first();
                if(!$quote) return false;
                $haveTeam = $quote->team()->count();
                if($quote && !$haveTeam){
                    $this->quote = $quote;
                    $this->quote_items = $this->quote->items()->where('deleted', 0)->get();
                    $this->itemsCount  = $this->quote_items->count();
                    $this->total_amount = $this->quote->amount;
                }
            }
        }
        if($this->quote){
            $this->amount =  $this->quote->grand_total_amount;
            $this->discount_amount = $this->quote->grand_total_amount;
            $this->tax_amount = $this->quote->tax_amount;
            $this->shipping_cost = $this->quote->shipping_cost;
            $this->total_amount = $this->quote->amount;
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
