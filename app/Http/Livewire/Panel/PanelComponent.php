<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;

use App\Models\Card;

use App\Models\Place;

use App\Models\Galery;

use App\Models\Gift;

use Livewire\WithFileUploads;

class PanelComponent extends Component
{

    use WithFileUploads;

    public $invitacion, $arrayEvent, $imageEvent, $arrayGalery, $imagen, $arrayRegalo, $imagenRegalo;

    public $time ;

    public function mount(Card $slug){

        $this -> invitacion = $slug ;

    }

    public function addEvent(){

        $this -> arrayEvent['image'] = $this -> imageEvent -> store('img/Eventos') ;

        $this -> arrayEvent['card_id'] = $this -> invitacion -> id ;

        $this -> arrayEvent['start_date'] =  date('Y-m-d') ;

        
        $event = Place::create( $this -> arrayEvent );

        $this->reset('arrayEvent');

        $this->reset('imageEvent');


    }


    public function addPhoto(){


        $this -> arrayGalery['image'] = $this -> imagen -> store('img/Galeria') ;

        $this -> arrayGalery['card_id'] = $this -> invitacion -> id ;


        
        $foto = Galery::create( $this -> arrayGalery );

        $this->reset('arrayGalery');

        $this->reset('imagen');


    }

    public function addGift(){

        $this -> arrayRegalo['image'] = $this -> imagenRegalo -> store('img/Eventos') ;

        $this -> arrayRegalo['card_id'] = $this -> invitacion -> id ;

        
        $event = Gift::create( $this -> arrayRegalo );

        $this->reset('arrayRegalo');

        $this->reset('imagenRegalo');


    }

    public function changeTime(){

        $this->invitacion = Card::find($this->invitacion -> id);

        $this->invitacion -> start_date = date('Y-m-d', strtotime($this -> time));

        $this->invitacion->save();

        dd($this -> time);


    }

    public function render()
    {

        $regalos = Gift::orderBy('title')
                                -> where('card_id', $this -> invitacion -> id)
                                ->get();

        $fotos = Galery::orderBy('image')
                                -> where('card_id', $this -> invitacion -> id)
                                ->get();

        $events = Place::orderBy('title')
                                -> where('card_id', $this -> invitacion -> id)
                                ->get();

        return view('livewire.panel.panel-component' , compact('events','fotos', 'regalos'))
                    ->layout('layouts.build');
    }
}
