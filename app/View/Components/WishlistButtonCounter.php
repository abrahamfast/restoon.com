<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WishlistButtonCounter extends Component
{
    public $count = 0;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $user = Auth::user();
        if($user) {
            $this->count = Auth::user()->wishlist()->count();     
        }
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.wishlist-button-counter');
    }
}
