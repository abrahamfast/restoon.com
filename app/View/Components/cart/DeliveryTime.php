<?php

namespace App\View\Components\cart;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\View\Component;

class DeliveryTime extends Component
{
    public $dataRanges;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $period = CarbonInterval::toPeriod(Carbon::now(), '31 days');
        foreach ($period as $date){
            $this->dataRanges[] = verta($date);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cart.delivery-time');
    }
}
