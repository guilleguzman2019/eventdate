<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;

use Illuminate\Support\Str;

use Livewire\WithFileUploads;

use App\Models\Card;

use Illuminate\Support\Facades\Auth;

class PostComponent extends Component
{

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
        dd($this -> card ->  slug);
    }

    public function render()
    {
        return view('livewire.web.post-component')
                    ->layout('layouts.template');
    }
}
