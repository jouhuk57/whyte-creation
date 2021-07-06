<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Category;

class MenuComponent extends Component
{
    public function render()
    {
        $categories=Category::whereNull('parent_id')->get();
        return view('livewire.menu-component',['categories'=>$categories]);
    }
}
