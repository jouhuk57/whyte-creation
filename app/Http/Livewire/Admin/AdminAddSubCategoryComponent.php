<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Category;

class AdminAddSubCategoryComponent extends Component
{
    public $category;
    public $subcategory;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'category' => 'required',
            'subcategory' => 'required',
        
        ]);
    }
    public function storeCategory()
    {
        $this->validate([
            'category' => 'required',
            'subcategory' => 'required',
            
        ]);
        $category = new Category();
        $category->parent_id=$this->category;
        $category->name=$this->subcategory;
        $category->save();
        session()->flash('message',"Sub Category has been created successfully");
    }

    public function render()
    {
        $categories=Category::whereNull('parent_id')->get();
        return view('livewire.admin.admin-add-sub-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
