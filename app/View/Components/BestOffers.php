<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Offer;

class BestOffers extends Component
{
    public $offers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->offers = Offer::where('activate', 1)->where('layout', 'thumbnail')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.best-offers');
    }
}
