<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;

class BotonComponent extends Component
{

    public function guardar()
    {
        $this->emit('guardar');
    }

    public function render()
    {
        return view('livewire.panel.boton-component')
                    ->layout('layouts.template');
    }
}
