<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('brands')->name('brands.')->group(function () {
    Route::get('/', [BrandController::class, 'index'])->name('index');
    // Route::get('/create', [BrandController::class, 'create'])->name('create');
    // Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('edit');
});

Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    // Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('edit');
});

Route::prefix('orders')->name('orders.')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('index');
    Route::get('/create', [OrderController::class, 'create'])->name('create');
    // Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('edit');
});

Route::prefix('shops')->name('shops.')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('index');
    Route::get('/create', [ShopController::class, 'create'])->name('create');
    // Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
