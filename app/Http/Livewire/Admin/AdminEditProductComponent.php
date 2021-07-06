<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Category;

use App\Models\Product;

use Livewire\WithFileUploads;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;


class AdminEditProductComponent extends Component
{

    use withFileUploads;
    public $name;
    public $description;
    public $image;
    public $newimage;
    public $category_id;
    public $subcategory_id;
    public $subcategories;
    public $images;
    public $product_id;


    public function mount($product_id)
    {
        $this->$product_id = $product_id;
        $product=Product::where('id',$product_id)->first();
        $this->product_id = $product->id;
        $this->name=$product->name;
        $this->description= $product->description;
        $this->image= $product->image;
        $this->images= $product->images;
        $category=$product->category_id;
        $result = DB::table('categories')->select('parent_id')->where('id', $category)->first();
        if($result->parent_id==NULL)
        {
            $this->category_id=$category;
        //    $this->subcategories = Category::where('parent_id', $this->category_id)->get();
        //    $this->subcategory_id=NULL;
        }
        else
        {
            $this->category_id=$result->parent_id;
            $this->subcategories = Category::where('parent_id', $this->category_id)->get();
            $this->subcategory_id=$category;  
           
        }

    }


    public function getSubcategory()
    {
        $this->subcategory_id=NULL;
        $this->subcategories = Category::where('parent_id', $this->category_id)->get();
    }


    public function render()
    {
        $categories=Category::whereNull('parent_id')->get();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories])->layout('layouts.base');
    }

}
