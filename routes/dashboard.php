<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\CategoryController;



// Route::get('/search', [CategoryController::class,'search'])->name('search');
 #################### categories#################################
 Route::controller(CategoryController::class)->prefix('categories')->name('categories.')->group(function () {
    Route::get('/search','search')->name('search');
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{category}', 'edit')->name('edit');
    Route::put('/{category}', 'update')->name('update');
    Route::delete('/{category}', 'destroy')->name('destroy');
  
});


 #################### products#################################
 Route::controller(ProductController::class)->prefix('products')->name('products.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{product}', 'edit')->name('edit');
    Route::put('/{product}', 'update')->name('update');
    Route::get('destroy/{product}', 'destroy')->name('destroy');
   
});