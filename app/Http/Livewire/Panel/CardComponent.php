<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Card;

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
            'createArray.slug' => 'required',
            'createArray.subtitle' => 'required',
            'createArray.title' => 'required',
            'home_bg_desktop' => 'required|image|mimes:png,jpg,jpeg|max:4096',
            'home_bg_mobile' => 'required|image|mimes:png,jpg,jpeg|max:4096',
        ]);

        $this -> createArray['home_bg_desktop'] = $this -> home_bg_desktop -> store('img/invitacion');
        $this -> createArray['home_bg_mobile'] = $this -> home_bg_mobile -> store('img/invitacion');

        $this -> createArray['slug'] = $this -> slug ;

        $this -> createArray['user_id'] = Auth::user() -> id ;

        $this -> createArray['start_date'] = date('Y-m-d H:i:s') ;

        Card::create( $this -> createArray );

        $this -> reset(['home_bg_desktop', 'home_bg_mobile','createArray']);
        $this -> emit('saved');
    }

    public function render()
    {
        $invitaciones = Card::orderBy('title') -> paginate();
        return view('livewire.panel.card-component', compact('invitaciones'))
                                                    ->layout('layouts.panel');

    }
}
