<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CategoriesModal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // get category
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        // set model collection
        return view('components.categories-modal');
    }
}
