<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Wishlist extends Component
{
    protected $wishlist;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($wishlist)
    {
        $this->wishlist = $wishlist;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.app.wishlist');
    }
}
