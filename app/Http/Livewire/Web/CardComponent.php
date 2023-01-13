<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;

use Illuminate\Support\Str;

use Livewire\WithFileUploads;

use App\Models\Card;

use Illuminate\Support\Facades\Auth;

class CardComponent extends Component
{

    use WithFileUploads;


    public $card, $titulo, $fecha, $historia, $image;


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


        $this -> card -> title = $this -> titulo;

        $this -> card -> start_date = $this -> fecha;

        $this -> card -> history_description = $this -> historia;

        //$this -> card -> slug = Str::slug($this -> titulo);

        $this -> card -> save();

        redirect()->to('http://localhost:8000/invitacion/'.$this -> card -> slug.'?edit=true');

        
    }

    public function render()
    {
        return view('livewire.web.chic-component')
                    ->layout('layouts.template');
    }
}
