<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Category;

class AdminEditSubCategoryComponent extends Component
{


    public $category_id;
    public $subcategory;
    public $category;
    public function mount($category_id)
    {
        $this->$category_id = $category_id;
        $category=Category::where('id',$category_id)->first();
        $this->category_id = $category->id;
        $this->category=$category->parent_id;
        $this->subcategory=$category->name;
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'category' => 'required',
            'subcategory' => 'required',
        
        ]);
    }
    public function editCategory()
    {
        $this->validate([
            'category' => 'required',
            'subcategory' => 'required',
            
        ]);
        $category =Category::find($this->category_id);
        $category->parent_id=$this->category;
        $category->name=$this->subcategory;
        session()->flash('message',"Sub Category has been updated successfully");
    }
    public function render()
    {
        $categories=Category::whereNull('parent_id')->get();
        return view('livewire.admin.admin-edit-sub-category-component',['categories'=>$categories])->layout('layouts.base');
    }

}
