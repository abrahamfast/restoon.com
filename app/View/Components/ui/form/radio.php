<?php

namespace App\View\Components\ui\form;

use Illuminate\View\Component;

class radio extends Component
{
    public $id;
    public $name;
    public $label;

    /**
     * Create a new component instance.
     *
     * @param $id
     * @param $name
     * @param $label
     */
    public function __construct($id, $name, $label)
    {
        //
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.form.radio');
    }
}
