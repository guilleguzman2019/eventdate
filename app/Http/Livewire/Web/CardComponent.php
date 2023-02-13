<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;

use Illuminate\Support\Str;

use Livewire\WithFileUploads;
use Livewire\WithPagination;

use App\Models\Card;

use App\Models\Place;

use App\Models\Galery;

use App\Models\Gift;

use Illuminate\Support\Facades\Auth;

class CardComponent extends Component
{

    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $card, $titulo, $fecha, $historia, $image;

    public $eventos ;

    public $cantidaEvent ;

    public $arrayPlaces;


    public $ArrayInvitacion = [] ;


    public function mount(Card $slug)
    {


        $this -> card = $slug;

        $this -> ArrayInvitacion['title'] = $this ->card -> title ;

        $this -> ArrayInvitacion['subtitle'] = $this ->card -> subtitle ;

        $this -> ArrayInvitacion['history_title'] = $this ->card -> history_title ;

        $this -> ArrayInvitacion['history_description'] = $this ->card -> history_description ;

        $this -> ArrayInvitacion['instagram_title'] = $this ->card -> instagram_title ;

        $this -> ArrayInvitacion['instagram_hashtag'] = $this ->card -> instagram_hashtag ;

        $this -> ArrayInvitacion['dresscode_title'] = $this ->card -> dresscode_title ;

        $this -> ArrayInvitacion['dresscode_type'] = $this ->card -> dresscode_type ;

        $this -> ArrayInvitacion['music_title'] = $this ->card -> music_title ;

        $this -> ArrayInvitacion['music_description'] = $this ->card -> music_description ;

        $this -> ArrayInvitacion['gift_title'] = $this ->card -> gift_title ;

        $this -> ArrayInvitacion['gift_description'] = $this ->card -> gift_description ;

        $this -> ArrayInvitacion['gift_bank'] = $this ->card -> gift_bank ;

        $this -> ArrayInvitacion['phrase'] = $this ->card -> phrase ;

        $this -> ArrayInvitacion['transport_private_title'] = $this ->card -> transport_private_title ;

        $this -> ArrayInvitacion['transport_private_description'] = $this ->card -> transport_private_description ;

        $this -> ArrayInvitacion['confirm_title'] = $this ->card -> confirm_title ;

        $this -> ArrayInvitacion['confirm_description'] = $this ->card -> confirm_description ;


        $time = date('Y-m-d',strtotime($this -> card -> start_date));

        $this -> fecha = $time ;


    }

    public function eliminar($id)
    {

        dd($id);

        $place = Place::find($id);
        
        $place->delete();

    }

    public function actualizar(){

        $this->card->title = $this -> ArrayInvitacion['title'];
      
        $this->card->save();
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
        $regalos = Gift::orderBy('title')
                                -> where('card_id', $this -> card -> id)
                                ->get();

        $fotos = Galery::orderBy('image')
                                -> where('card_id', $this -> card -> id)
                                -> get();

        $events = Place::orderBy('title')
                                -> where('card_id', $this -> card -> id)
                                -> paginate();

        if ($this-> card -> template -> name == 'Boho') {

            return view('template_edit.boho' , compact('events', 'fotos', 'regalos'))
                        ->layout('layouts.template');
        }
    
        if ($this-> card -> template -> name == 'Chic') {
    
            return view('template_edit.Chic' , compact('events', 'fotos', 'regalos'))
                      ->layout('layouts.template');
        }
    
        if ($this-> card -> template -> name == 'Romantic') {
    
            return view('template_edit.romantic' , compact('events', 'fotos', 'regalos'))
                    ->layout('layouts.template');
        }
    
        if ($this-> card -> template -> name == 'Western') {
    
          return view('template_edit.western' , compact('events', 'fotos', 'regalos'))
                      ->layout('layouts.template');
        }


    }
}
