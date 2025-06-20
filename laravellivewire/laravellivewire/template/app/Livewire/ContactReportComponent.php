<?php

namespace App\Livewire;

use Livewire\Component;

class ContactReportComponent extends Component
{
    public $deals=[
        ['Day'=>'Jan','Value'=>40],
        ['Day'=>'Feb','Value'=>30],
        ['Day'=>'Mar','Value'=>20],
        ['Day'=>'Apr','Value'=>30],
        ['Day'=>'May','Value'=>22],
        ['Day'=>'Jun','Value'=>20],
        ['Day'=>'Jul','Value'=>30],
        ['Day'=>'Aug','Value'=>20],
        ['Day'=>'Sep','Value'=>22],
        ['Day'=>'Oct','Value'=>30],
        ['Day'=>'Nov','Value'=>15],
        ['Day'=>'Dec','Value'=>20],
    ];
    public function render()
    {
        return view('livewire.contact-report-component');
    }
}
