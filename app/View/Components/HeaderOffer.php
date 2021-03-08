<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Offer;

class HeaderOffer extends Component
{
    public $offers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->offers = Offer::where([
            'layout' => 'thumbnail',
            'style' => 'small',
            'deleted' => 0
        ])->limit(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.header-offer');
    }
}
