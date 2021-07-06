<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;


use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminSubCategoryComponent;
use App\Http\Livewire\Admin\AdminEditSubCategoryComponent;
use App\Http\Livewire\Admin\AdminAddSubCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',HomeComponent::class);

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){

    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');

    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.editcategory');
    
    Route::get('/admin/subcategories',AdminSubCategoryComponent::class)->name('admin.subcategories');
    Route::get('/admin/subcategory/add',AdminAddSubCategoryComponent::class)->name('admin.addsubcategory');
    Route::get('/admin/subcategory/edit/{category_id}',AdminEditSubCategoryComponent::class)->name('admin.editsubcategory');

    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/product/edit/{product_id}',AdminEditProductComponent::class)->name('admin.editproduct');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');




