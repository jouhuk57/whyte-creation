<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class ProductDetailsComponent extends Component
{
    public $product_id;

    public function mount($product_id)
    {
        $this->product_id=$product_id;
    }
    public function render()
    {
        $product = Product::where('id',$this->product_id)->first();
        return view('livewire.product-details-component',['product'=>$product])->layout('layouts.base');
    }
}
