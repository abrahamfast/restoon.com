<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\{ProductCategories, Brand};

class FillterOptions extends Component
{
    public $categories;
    public $brands;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = ProductCategories::where('deleted', 0)->get();
        $this->brands = Brand::where('deleted', 0)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.fillter-options');
    }
}
