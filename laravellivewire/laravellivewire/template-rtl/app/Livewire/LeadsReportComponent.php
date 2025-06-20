<?php

namespace App\Livewire;

use Livewire\Component;

class LeadsReportComponent extends Component
{
    public $deals=[
        ['Day'=>'Jan','Value'=>400],
        ['Day'=>'Feb','Value'=>130],
        ['Day'=>'Mar','Value'=>240],
        ['Day'=>'Apr','Value'=>450],
        ['Day'=>'May','Value'=>250],
        ['Day'=>'Jun','Value'=>180],
        ['Day'=>'Jul','Value'=>300],
        ['Day'=>'Aug','Value'=>240],
        ['Day'=>'Sep','Value'=>300],
        ['Day'=>'Oct','Value'=>150],
        ['Day'=>'Nov','Value'=>250],
        ['Day'=>'Dec','Value'=>500],
    ];
    public function render()
    {
        return view('livewire.leads-report-component');
    }
}
