<?php

namespace App\View\Components\Profile\Order;

use Illuminate\View\Component;

class Detail extends Component
{
    public $account;
    public $quote;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($account, $quote)
    {
        $this->account = $account;
        $this->quote = $quote;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.profile.order.detail');
    }
}
