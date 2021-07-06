<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Category;

use App\Models\Product;

use Livewire\WithFileUploads;

use Carbon\Carbon;


class AdminAddProductComponent extends Component
{


    use withFileUploads;
    public $name;
    public $description;
    public $image;
    public $category_id;
    public $subcategory_id;
    public $subcategories=NULL;
    public $images;


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=> 'required',
            'description'=> 'required',
            'image'=> 'required|mimes:jpeg,png',
            'category_id'=> 'required',
            
        ]);
    }
   
    public function addProduct()
    {
        $this->validate([
            'name'=> 'required',
            'description'=> 'required',
            'image'=> 'required|mimes:jpeg,png',
            'category_id'=> 'required',
        ]);
     
        $product = new Product();
        $product->name=$this->name;
        $product->description=$this->description;
        $imageName=Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image=$imageName;
        $imageNames='';
        if($this->images)
        {
          
            foreach($this->images as $key => $image)
            {
                $imgName=Carbon::now()->timestamp.$key.'.'.$image->extension();
                $image->storeAs('products',$imgName);
                $imageNames=$imageNames.','.$imgName;
            }
        }

        $product->images=$imageNames;

        if($this->subcategory_id==null)
        {
            $product->category_id=$this->category_id;
        }
        else
        {
            $product->category_id=$this->subcategory_id;
        }
        $product->save();
        session()->flash('message',"Product has been created successfully");
    }


    public function getSubcategory()
    {
        $this->subcategory_id=NULL;
        $this->subcategories = Category::where('parent_id', $this->category_id)->get();
    }


    public function render()
    {
        $categories=Category::whereNull('parent_id')->get();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}
