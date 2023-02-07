<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;

use App\Models\Card;

use App\Models\Place;

use Livewire\WithFileUploads;

class PanelComponent extends Component
{

    use WithFileUploads;

    public $invitacion, $arrayEvent, $imageEvent;



    public function mount(Card $slug){

        $this -> invitacion = $slug ;

    }

    public function addEvent(){

        $this -> arrayEvent['image'] = $this -> imageEvent -> store('img/eventos') ;

        $this -> arrayEvent['card_id'] = $this -> invitacion -> id ;

        $this -> arrayEvent['start_date'] =  date('Y-m-d') ;

        
        $event = Place::create( $this -> arrayEvent );

    }

    public function render()
    {
        return view('livewire.panel.panel-component')
                    ->layout('layouts.build');
    }
}
