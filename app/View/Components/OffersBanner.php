<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Offer;

class OffersBanner extends Component
{
    public $banners;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->banners = Offer::where('activate', 1)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.offers-banner');
    }
}
