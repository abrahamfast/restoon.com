<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $slug;
    public $lable = null;
    public $link = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slug, $lable = null, $link = null)
    {
        $this->slug = $slug;
        $this->lable = $lable;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}
