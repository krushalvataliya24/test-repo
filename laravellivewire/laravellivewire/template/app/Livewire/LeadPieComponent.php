<?php

namespace App\Livewire;

use Livewire\Component;

class LeadPieComponent extends Component
{
    public $deals=[
        ['Value'=>44],
        ['Value'=>55],
        ['Value'=>13],
        ['Value'=>43],

    ];
    public function render()
    {
        return view('livewire.lead-pie-component');
    }
}
