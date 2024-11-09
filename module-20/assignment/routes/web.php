<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});



//Route::resource('products', ProductController::class);





// Custom routes for product management
Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // List all products
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // Show the form to create a new product
Route::post('/products', [ProductController::class, 'store'])->name('products.store'); // Store a new product
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show'); // Show a specific product
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Show the form to edit a product
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update'); // Update a product
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); // Delete a product
