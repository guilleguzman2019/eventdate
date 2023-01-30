<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;

use App\Models\Template;

use App\Models\Place;
use App\Models\Card;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

use Livewire\WithFileUploads;
use Livewire\WithPagination;

use DateTime;

class EditarComponent extends Component
{


  use WithFileUploads;
  use WithPagination;

  

    public $template, $titulo, $image, $events , $arrayPlaces = 3;

    public $createArray ;

    public function mount( Template $id){

        $this->template = $id ;

        $this->titulo = 'Martin & Laura' ;


      }

    
    public function save(){

      $this -> createArray['title'] = $this -> titulo;

      $this -> createArray['slug'] = Str::slug($this -> titulo) ;

        $this -> createArray['user_id'] = Auth::user() -> id ;

        $this -> createArray['start_date'] = date('Y-m-d H:i:s') ;

        $this -> createArray['template_id'] = $this->template -> id ;

        $card = Card::create( $this -> createArray );

        $slug = $card ->slug ;

        $id = $card -> id ;


      $now = new DateTime();

      if(!empty($this -> events)){

        foreach ($this -> events as $event)
   		  {
          $event['image'] = 'img/eventos/CZVKJy8dopy8cpzdAKj7niKResfaue7asKphQqjL.jpg';

          $event['start_date'] = date('Y-m-d H:i:s') ;

          $event['card_id'] = $id ;

          Place::create( $event);

           return Redirect::to('http://localhost:8000/invitacion/'.$slug);

   		  }

      }

      Redirect::to('http://localhost:8000/invitacion/'.$slug);

	  }


    public function add(){

      $this -> arrayPlaces ++ ;

    }


    public function render()
    {

      if ($this->template -> name == 'Boho') {

        return view('template_create.boho')
                    ->layout('layouts.template');
    }

    if ($this->template -> name == 'Chic') {

      return view('template_create.Chic')
                  ->layout('layouts.template');
  }

  if ($this->template -> name == 'Romantic') {

    return view('template_create.romantic')
                ->layout('layouts.template');
}

    if ($this->template -> name == 'Western') {

      return view('template_create.western')
                  ->layout('layouts.template');
  }

}


}
