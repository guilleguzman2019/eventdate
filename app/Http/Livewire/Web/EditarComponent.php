<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;

use App\Models\Template;

use App\Models\Place;

use Livewire\WithFileUploads;
use Livewire\WithPagination;

class EditarComponent extends Component
{


  use WithFileUploads;
  use WithPagination;

  public $places = array(
 
    array(
     
          'title' => 'Catedral',
          'place_name' =>'Catedral de cordoba',
          'address' =>'locatelli 2609'
     
         ),
     
    array(
     
          'title' =>'Catedral',
          'place_name' =>'Catedral de cordoba',
          'address' =>'locatelli 2609'
         )
     
    );

  
    public $template, $titulo, $image, $events;

    public function mount( Template $id){

        $this->template = $id ;

        $this->titulo = 'Martin & Laura' ;


        $this->events = $this-> places  ;


      }

    
    public function save(){

      dd($this -> titulo);
    }


    public function render()
    {

      if ($this->template -> name == 'Boho') {

        return view('template.boho')
                    ->layout('layouts.template');
    }

    if ($this->template -> name == 'Chic') {

      return view('template.Chic')
                  ->layout('layouts.template');
  }

  if ($this->template -> name == 'Romantic') {

    return view('template.romantic')
                ->layout('layouts.template');
}

    if ($this->template -> name == 'Western') {

      return view('template.western')
                  ->layout('layouts.template');
  }

}


}
