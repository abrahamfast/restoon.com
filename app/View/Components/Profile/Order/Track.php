<?php

namespace App\View\Components\Profile\Order;

use Illuminate\View\Component;

class Track extends Component
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
        return view('components.profile.order.track');
    }
}
