<?php

use App\Http\Controllers\ProdukbengkelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bengkelcontroller;

Route::get('/', function(){
  return "<h1>Halo Saya FatchurR</h1>";
});

Route::get('/store', [ProdukbengkelController::class, 'index'])->name('produk.index');

Route::get('/bengkel',[bengkelcontroller::class,'halo']);
Route::post('/store', [ProdukbengkelController::class, 'store'])->name('produk.store');
Route::get('/produk/{produk}', [ProdukbengkelController::class, 'show'])->name('produk.show');
Route::get('/produk/{produk}/edit', [ProdukbengkelController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{produk}', [ProdukbengkelController::class, 'update'])->name('produk.update');
Route::delete('/produk/{produk}', [ProdukbengkelController::class, 'destroy'])->name('produk.destroy');