<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FilterTop extends Component
{
    public $lable;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($lable)
    {
        $this->lable = $lable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.filter-top');
    }
}
