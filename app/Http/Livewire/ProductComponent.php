<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductComponent extends Component
{
    public $category_id;

    public function mount($category_id)
    {
        $this->category_id=$category_id;
    }
    public function render()
    {
        $result = DB::table('categories')->select('parent_id')->where('id',$this->category_id)->first();
 
        if($result->parent_id==NULL)
        {
            $products= DB::table('products')
                          ->join('categories', 'products.category_id', '=', 'categories.id')
                          ->where('parent_id', $this->category_id)
                          ->orWhere('products.category_id', $this->category_id)
                          ->get();
                
        }
        else
        {
            $products= Product::where('category_id',$this->category_id)->get();
           
        }

        
        return view('livewire.product-component',['products'=>$products])->layout('layouts.base');
    }
}
