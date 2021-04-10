<?php

namespace App\View\Components\ui;

use Illuminate\View\Component;

class modal extends Component
{
    public $header;
    public $id;

    /**
     * Create a new component instance.
     *
     * @param $id
     * @param $header
     */
    public function __construct($id, $header)
    {
        //
        $this->id = $id;
        $this->header = $header;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.modal');
    }
}
