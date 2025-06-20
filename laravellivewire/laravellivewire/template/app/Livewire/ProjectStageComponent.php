<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectStageComponent extends Component
{
    public $data = [
        ['stage' => 'Stage 1', 'value' => 100],
        ['stage' => 'Stage 2', 'value' => 75],
        ['stage' => 'Stage 3', 'value' => 50],
        ['stage' => 'Stage 4', 'value' => 25],
    ];
    public function render()
    {
        return view('livewire.project-stage-component');
    }
}
