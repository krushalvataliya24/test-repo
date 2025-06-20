<?php

namespace App\Livewire;

use Livewire\Component;

class ChartDealsComponent extends Component
{
    public $deals=[
        ['Day'=>'Jan','Value'=>10],
        ['Day'=>'Feb','Value'=>20],
        ['Day'=>'Mar','Value'=>30],
        ['Day'=>'Apr','Value'=>15],
        ['Day'=>'May','Value'=>22],
        ['Day'=>'Jun','Value'=>40],
        ['Day'=>'Jul','Value'=>30],
        ['Day'=>'Aug','Value'=>20],
        ['Day'=>'Sep','Value'=>30],
        ['Day'=>'Oct','Value'=>18],
        ['Day'=>'Nov','Value'=>30],
        ['Day'=>'Dec','Value'=>60],
    ];
    public function render()
    {
        return view('livewire.chart-deals-component');
    }
}
