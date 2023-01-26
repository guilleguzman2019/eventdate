<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use App\Models\Category;
use App\Models\Template;

class TemplateComponent extends Component
{

    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $categories, $createArray, $image, $editArray = ['image' => null], $imageEdit, $category_id, $tmpl;

    public function mount()
    {

        $this -> categories = Category::orderBy('name') -> get();
    }

    public function save()
    {
        $this -> validate([
            'createArray.name' => 'required',
            'category_id' =>'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $this -> createArray['image'] = $this -> image -> store('img/templates');

        $template = Template::create( $this -> createArray );

        $template -> categories() -> attach( $this-> category_id );

        $this -> reset(['image', 'createArray']);
        $this -> emit('saved');
    }

    public function edit(Template $template)
    {
        $this -> tmpl = $template;
        $this -> editArray['name'] = $template -> name;
        $this -> editArray['category_id'] = $template -> category_id ;
        $this -> editArray['image'] = $template -> image;
    }


    public function update()
    {
        $this -> validate([
            'editArray.name' => 'required',
            'editArray.category_id' => 'required',
            'imageEdit' => 'nullable|image|mimes:png,jpg,jpeg',
        ]);

        if ( $this -> imageEdit ) {
            Storage::disk('public') -> delete($this -> tmpl -> image);
            $this -> editArray['image'] = $this -> imageEdit -> store('img/template');
        }

        $this -> tmpl -> update($this -> editArray);
        $this -> emit('updated');
    }

    public function destroy(Template $template)
    {
        Storage::disk('public') -> delete($template -> image);
        $template -> delete();
        $this -> emit('deleted');
    }
    
    public function render()
    {

        $templates = Template::orderBy('name') -> with('categories') -> paginate();
        return view('livewire.admin.template-component', compact('templates'));
    }
}
