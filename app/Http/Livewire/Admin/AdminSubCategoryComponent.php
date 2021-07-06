<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class AdminSubCategoryComponent extends Component
{
    public function deleteCategory($id)
    {
        $category=Category::find($id);
        $category->delete();
        session()->flash('message',"Category has been deleted successfully");
    }
    public function render()
    {
        $categories=DB::table('categories')

           ->select('categories.*', 'chiled_data.name as parent_name')

           ->leftjoin('categories as chiled_data', 'chiled_data.id', '=', 'categories.parent_id')
 
           ->whereNotNull('categories.parent_id')

           ->get();
        return view('livewire.admin.admin-sub-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
