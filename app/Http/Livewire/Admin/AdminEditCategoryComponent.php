<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use Illuminate\Support\Str;

use App\Models\Category;

use Illuminate\Validation\Rule;

class AdminEditCategoryComponent extends Component
{
    public $category_id;
    public $name;
    public function mount($category_id)
    {
        $this->$category_id = $category_id;
        $category=Category::where('id',$category_id)->first();
        $this->category_id = $category->id;
        $this->name=$category->name;
    }
        public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
        ]);
    }

    public function updateCategory()
    {
        $this->validate([
            'name' => 'required',
        ]);
        $category =Category::find($this->category_id);
        $category->name=$this->name;
        $category->save();
        session()->flash('message',"Category has been updated successfully");
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('layouts.base');
    }
}
