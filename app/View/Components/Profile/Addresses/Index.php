<?php

namespace App\View\Components\Profile\Addresses;

use Illuminate\View\Component;

class Index extends Component
{
    public $user;

    /**
     * Create a new component instance.
     *
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profile.addresses.index');
    }
}
