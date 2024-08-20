<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/users/add', [AdminController::class, 'user_add'])->name('user_add');
    Route::post('/users/add/handler', [AdminController::class, 'user_add_handler'])->name('user_add_handler');
    Route::get('/users/edit', [AdminController::class, 'user_edit'])->name('user_edit');
    Route::post('/users/edit/handler', [AdminController::class, 'user_edit_handler'])->name('user_edit_handler');
    Route::post('/users/remove', [AdminController::class, 'user_delete'])->name('user_delete');

    Route::get('/category', [AdminController::class, 'category_list'])->name('category_list');
    Route::post('/category/add', [AdminController::class, 'category_add'])->name('category_add');
    Route::post('/category/edit/handler', [AdminController::class, 'category_edit'])->name('category_edit');
    Route::post('/category/remove/handler', [AdminController::class, 'category_delete'])->name('category_delete');

    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::get('/product/add', [AdminController::class, 'product_add'])->name('product_add');
    Route::post('/product/add/handler', [AdminController::class, 'product_add_handler'])->name('product_add_handler');
    Route::get('/product/edit', [AdminController::class, 'product_edit'])->name('product_edit');
    Route::post('/product/edit/handler', [AdminController::class, 'product_edit_handler'])->name('product_edit_handler');
    Route::post('/product/remove', [AdminController::class, 'product_delete'])->name('product_delete');

    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
});