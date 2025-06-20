<?php

namespace App\Livewire;

use Livewire\Component;

class ChartWonComponent extends Component
{
    public $deals=[
        ['Value'=>400],
        ['Value'=>122],
        ['Value'=>250],
    ];
    public function render()
    {
        return view('livewire.chart-won-component');
    }
}
