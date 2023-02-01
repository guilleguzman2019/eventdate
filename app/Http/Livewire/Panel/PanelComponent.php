<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;

class PanelComponent extends Component
{
    public function render()
    {
        return view('livewire.panel.panel-component')
                    ->layout('layouts.build');
    }
}
