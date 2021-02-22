<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\ProductCategories;

class Footer extends Component
{

    public $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = ProductCategories::where('deleted', 0)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
