<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;

use Illuminate\Support\Str;

use Livewire\WithFileUploads;
use Livewire\WithPagination;

use App\Models\Card;

use App\Models\Place;

use Illuminate\Support\Facades\Auth;

class CardComponent extends Component
{

    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $card, $titulo, $fecha, $historia, $image, $event, $imageEvent, $arrayEventEdit;

    public $eventos ;


    public function mount(Card $slug)
    {


        $this -> card = $slug;

        $this -> titulo = $this ->card -> title ;

        $this -> historia = $this ->card -> history_description ;

        $time = date('Y-m-d',strtotime($this -> card -> start_date));

        $this -> fecha = $time ;

        $this -> eventos = Place::orderBy('title')-> where('card_id', $this -> card -> id)->get();


        for ($i =0; $i < count($this -> eventos) ; $i++) {

            $this -> arrayEventEdit[$i]['id'] = $this -> eventos[$i] -> id;
            $this -> arrayEventEdit[$i]['title'] = $this -> eventos[$i] -> title;
            $this -> arrayEventEdit[$i]['place_name'] = $this -> eventos[$i] -> place_name;
            $this -> arrayEventEdit[$i]['address'] = $this -> eventos[$i] -> address;
            $this -> arrayEventEdit[$i]['start_date'] = $this -> eventos[$i] -> start_date;

        }

    }

    public function eliminar($id)
    {

        dd($id);

        $place = Place::find($id);
        
        $place->delete();

    }


    public function save()
    {

        dd($this ->eventos);

        if ( $this -> image ) {
            $this -> card -> home_bg_desktop = $this -> image -> store('img/invitaciones');
        }

        $this -> card -> title = $this -> titulo;

        $this -> card -> start_date = $this -> fecha;

        $this -> card -> history_description = $this -> historia;

        //$this -> card -> slug = Str::slug($this -> titulo);

        $this -> card -> save();
        $this -> card = $this -> card -> fresh();

        //redirect()->to('http://localhost:8000/invitacion/'.$this -> card -> slug.'?edit=true');

        
    }

    public function addEvent()
    {



        if ( $this -> imageEvent ) {
            $this -> event['image'] = $this -> imageEvent -> store('img/eventos');
        }

        $this -> event['card_id'] = $this -> card -> id;

        $event = Place::create( $this -> event );




    }

    public function render()
    {
        $events = Place::orderBy('title')
                                -> where('card_id', $this -> card -> id)
                                -> paginate();

        if ($this-> card -> template -> name == 'Boho') {

            return view('template_edit.boho' , compact('events'))
                        ->layout('layouts.template');
        }
    
        if ($this-> card -> template -> name == 'Chic') {
    
            return view('template_edit.Chic' , compact('events'))
                      ->layout('layouts.template');
        }
    
        if ($this-> card -> template -> name == 'Romantic') {
    
            return view('template_edit.romantic' , compact('events'))
                    ->layout('layouts.template');
        }
    
        if ($this-> card -> template -> name == 'Western') {
    
          return view('template_edit.western' , compact('events'))
                      ->layout('layouts.template');
        }


    }
}
