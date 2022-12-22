<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CategoryComponent extends Component
{

    public $categories, $category, $image,  $imageEdit ;


    public function render()
    {
        return view('livewire.admin.category-component');
    }
}
