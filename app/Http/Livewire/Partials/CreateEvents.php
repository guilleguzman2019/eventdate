<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

class CreateEvents extends Component
{
    public $events, $arrayPlaces = 3;


    public function add(){

        $this -> arrayPlaces ++ ;

        $this->emit('addEvent');
  
      }


    public function render()
    {
        return view('livewire.partials.create-events');
    }
}
