<?php

namespace App\View\Components\ui\form;

use Illuminate\View\Component;

class input extends Component
{
    public $label;
    public $placeholder;
    public $class;
    public $id;
    public $name;
    public $required;
    public $row;

    /**
     * Create a new component instance.
     *
     * @param $label
     * @param $id
     * @param $placeholder
     * @param string $class
     * @param string $required
     * @param string $row
     */
    public function __construct(
        $label, $id, $placeholder,
        $class  = 'form-control ', $required  = 'required',
        $row = 'col-lg-12 col-md-12'
    )
    {
        $this->label = $label;
        $this->id = $id;
        $this->placeholder = $placeholder;
        $this->class .= $class;
        $this->required = $required;
        $this->row = $row;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.form.input');
    }
}
