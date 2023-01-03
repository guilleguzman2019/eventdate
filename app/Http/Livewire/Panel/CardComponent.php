<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Card;
use App\Models\Template;

class CardComponent extends Component
{

    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $slug, $createArray, $home_bg_desktop, $home_bg_mobile, $editArray = ['image' => null], $imageEdit, $ctgry;

    public function updatedCreateArrayTitle($value)
    {
        $this -> slug = Str::slug($value);
    }

    public function save()
    {   
        $this -> validate([
            'createArray.title' => 'required',
            'createArray.template_id' => 'required',
        ]);


        $this -> createArray['slug'] = Str::slug($this -> createArray['title']) ;

        $this -> createArray['user_id'] = Auth::user() -> id ;

        $this -> createArray['start_date'] = date('Y-m-d H:i:s') ;

        $card = Card::create( $this -> createArray );

        $id = $card -> id ;

        $this -> reset(['createArray']);
        $this -> emit('saved');

        redirect()->route('panel.edit.card', [$id]);
    }

    public function render()
    {
        $invitaciones = Card::orderBy('title') -> paginate();
        $templates = Template::orderBy('name') -> with('categories')->get() ;

        return view('livewire.panel.card-component', compact('invitaciones', 'templates'))
                                                    ->layout('layouts.panel');

    }
}
