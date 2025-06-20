<?php

namespace App\Livewire;

use Livewire\Component;

class LeadsChartComponent extends Component
{
    public $deals=[
        ['Day'=>'Inpipeline','Value'=>400],
        ['Day'=>'Follow Up','Value'=>30],
        ['Day'=>'Schedule','Value'=>248],
        ['Day'=>'Conversation','Value'=>470],
        ['Day'=>'Won','Value'=>470],
        ['Day'=>'Lost','Value'=>180],
    ];
    public function render()
    {
        return view('livewire.leads-chart-component');
    }
}
