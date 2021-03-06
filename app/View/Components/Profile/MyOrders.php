<?php

namespace App\View\Components\Profile;

use Illuminate\View\Component;

class MyOrders extends Component
{
    public $quote;
    public $account;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($quote, $account)
    {
        $this->quote = $quote;
        $this->account = $account;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.profile.my-orders');
    }
}
