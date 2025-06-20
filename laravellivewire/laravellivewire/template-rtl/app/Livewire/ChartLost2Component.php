<?php

namespace App\Livewire;

use Livewire\Component;

class ChartLost2Component extends Component
{
    public $deals=[
        ['Value'=>400],
        ['Value'=>220],
        ['Value'=>448],
    ];
    public function render()
    {
        return view('livewire.chart-lost2-component');
    }
}
