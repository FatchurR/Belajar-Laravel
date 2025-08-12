<?php

use App\Http\Controllers\ProdukbengkelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bengkelcontroller;

Route::get('/', function(){
  return "<h1>Halo Saya FatchurR</h1>";
});

Route::get('/store',function(){
    return view('produk.index');
});

Route::get('/bengkel',[bengkelcontroller::class,'halo']);
Route::get('/produktable', [ProdukbengkelController::class,'index'])->name('produk.index');
Route::post('/store', [ProdukbengkelController::class, 'store'])->name('produk.store');


