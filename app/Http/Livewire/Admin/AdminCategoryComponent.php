<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;


class AdminCategoryComponent extends Component
{

    public function deleteCategory($id)
    {
        $category=Category::find($id);
        $category->delete();
        session()->flash('message',"Category has been deleted successfully");
    }
    public function render()
    {
        $categories=Category::whereNull('parent_id')->get();
        return view('livewire.admin.admin-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
