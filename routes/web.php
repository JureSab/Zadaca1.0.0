<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products',[ProductController::class, 'showAll'])->name('products.all');
Route::get('/products/create',[ProductController::class, 'createProduct'])->name('products.create');
Route::post('/products/store',[ProductController::class, 'storeProduct'])->name('products.store');
Route::get('/products/{product}/edit/',[ProductController::class, 'editProduct'])->name('products.edit');
Route::post('/products/{product}/update',[ProductController::class, 'updateProduct'])->name('products.update');
Route::delete('/products/{product}/delete',[ProductController::class, 'deleteProduct'])->name('products.delete');
