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
    return redirect()->route('products.index');
});
// Menampilkan daftar produk
Route::get('products', [ProductController::class, 'index'])->name('products.index');

// Menampilkan form untuk membuat produk baru
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

// Menyimpan produk baru ke dalam database
Route::post('products', [ProductController::class, 'store'])->name('products.store');

// Menampilkan detail produk berdasarkan ID
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

// Menampilkan form untuk mengedit produk berdasarkan ID
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Memperbarui produk berdasarkan ID
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');

// Menghapus produk berdasarkan ID
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
