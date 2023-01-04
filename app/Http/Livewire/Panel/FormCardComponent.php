<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;

use App\Models\Card;

class FormCardComponent extends Component
{

    public $slug, $title ;

    public function mount(Card $slug)
    {
        //dd($slug);

        $this -> title = $slug ->title ;
        
    }

    public function save()
    {
        $this -> slug -> title = $this -> title;
        $this -> slug -> save();
    }


    public function updated($name, $value)
    {
        $this->emit('actualizar',$name , $value);
    }

    public function render()
    {
        return view('livewire.panel.form-card-component');
    }
}
