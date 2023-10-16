<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\CategoryController;




 #################### categories#################################
 Route::controller(CategoryController::class)->prefix('categories')->name('categories.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{category}', 'edit')->name('edit');
    Route::put('/{category}', 'update')->name('update');
    Route::delete('/{category}', 'destroy')->name('destroy');
   
});