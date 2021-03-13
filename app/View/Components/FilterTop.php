<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FilterTop extends Component
{
    public $lable;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($lable, $type)
    {
        $this->lable = $lable;
        $this->type = $type;
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
