<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlertBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $param;

    public function __construct($param)
    {
        $this->param = $param;    //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert-bar');
    }
}
