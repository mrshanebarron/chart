<?php

namespace MrShaneBarron\chart\View\Components;

use Illuminate\View\Component;

class chart extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('ld-chart::components.chart');
    }
}
