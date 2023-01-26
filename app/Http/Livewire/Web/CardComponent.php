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


    public $card, $titulo, $fecha, $historia, $image, $event, $imageEvent;


    public function mount(Card $slug)
    {


        $this -> card = $slug;

        $this -> titulo = $this ->card -> title ;

        $this -> historia = $this ->card -> history_description ;

        $time = date('Y-m-d',strtotime($this -> card -> start_date));

        $this -> fecha = $time ;

    }


    public function save()
    {

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

        return view('livewire.web.western-component', compact('events'))
                    ->layout('layouts.template');
    }
}
