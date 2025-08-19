<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produkbengkel extends Model
{
    protected $table = 'produk';
        protected $fillable = ['nama', 'jenis', 'stok', 'gambar', 'deskripsi'];
    
}
