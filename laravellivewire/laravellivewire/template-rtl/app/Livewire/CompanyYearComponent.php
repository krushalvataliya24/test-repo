<?php

namespace App\Livewire;

use Livewire\Component;

class CompanyYearComponent extends Component
{
    public $deals=[
        ['Day'=>'Jan','Value'=>15],
        ['Day'=>'Feb','Value'=>20],
        ['Day'=>'Mar','Value'=>17],
        ['Day'=>'Apr','Value'=>40],
        ['Day'=>'May','Value'=>22],
        ['Day'=>'Jun','Value'=>40],
        ['Day'=>'Jul','Value'=>30],
        ['Day'=>'Aug','Value'=>15],
        ['Day'=>'Sep','Value'=>55],
        ['Day'=>'Oct','Value'=>30],
        ['Day'=>'Nov','Value'=>20],
        ['Day'=>'Dec','Value'=>25],
    ];
    public function render()
    {
        return view('livewire.company-year-component');
    }
}
