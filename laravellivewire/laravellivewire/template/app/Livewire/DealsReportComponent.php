<?php

namespace App\Livewire;

use Livewire\Component;

class DealsReportComponent extends Component
{
    public $deals=[
        ['Day'=>'Feb','Wonvalue'=>110, 'Lostvalue'=>45],
        ['Day'=>'Mar','Wonvalue'=>85, 'Lostvalue'=>55],
        ['Day'=>'Apr','Wonvalue'=>100, 'Lostvalue'=>50],
        ['Day'=>'May','Wonvalue'=>90, 'Lostvalue'=>55],
        ['Day'=>'Jun','Wonvalue'=>85, 'Lostvalue'=>40],
        ['Day'=>'Jul','Wonvalue'=>105, 'Lostvalue'=>60],
        ['Day'=>'Aug','Wonvalue'=>90, 'Lostvalue'=>55],
        ['Day'=>'Sep','Wonvalue'=>115, 'Lostvalue'=>60],
        ['Day'=>'Oct','Wonvalue'=>95, 'Lostvalue'=>66],
    ];
    public function render()
    {
        return view('livewire.deals-report-component');
    }
}
