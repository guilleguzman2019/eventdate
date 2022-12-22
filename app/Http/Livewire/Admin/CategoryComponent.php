<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CategoryComponent extends Component
{

    public $categories, $category, $image, $imageTable, $ico, $megamenu, $imageEdit, $imageTableEdit, $icoEdit, $megamenuEdit;

    
    public function render()
    {
        return view('livewire.admin.category-component');
    }
}
