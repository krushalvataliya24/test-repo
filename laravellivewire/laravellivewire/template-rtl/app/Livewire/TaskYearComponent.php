<?php

namespace App\Livewire;

use Livewire\Component;

class TaskYearComponent extends Component
{
    public $deals=[
        ['Day'=>'Jan','Value'=>10],
        ['Day'=>'Feb','Value'=>38],
        ['Day'=>'Mar','Value'=>18],
        ['Day'=>'Apr','Value'=>47],
        ['Day'=>'May','Value'=>13],
        ['Day'=>'Jun','Value'=>32],
        ['Day'=>'Jul','Value'=>15],
        ['Day'=>'Aug','Value'=>40],
        ['Day'=>'Sep','Value'=>18],
        ['Day'=>'Oct','Value'=>50],
        ['Day'=>'Nov','Value'=>30],
        ['Day'=>'Dec','Value'=>15],
    ];
    public function render()
    {
        return view('livewire.task-year-component');
    }
}
