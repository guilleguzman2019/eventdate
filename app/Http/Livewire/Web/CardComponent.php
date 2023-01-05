<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;

use App\Models\Card;

class CardComponent extends Component
{

    protected $listeners = ['actualizar'];

    public $card;

    public function mount(Card $slug)
    {
        $this -> card = $slug;
    }

    public function actualizar($name , $value)
    {
        dd($value);
    }

    public function render()
    {
        return view('livewire.web.card-component')
                    ->layout('layouts.template1');
    }
}
