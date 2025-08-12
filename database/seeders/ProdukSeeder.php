<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{

    public function run(): void
    {

        $produk = [
            [
                'nama' => 'Oli Yamaha',
                'jenis' => 'Cairan',
                'stok' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Ban Motor',
                'jenis' => 'Ban',
                'stok' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Kampas Rem',
                'jenis' => 'Aksesoris',
                'stok' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('produk')->insert($produk);
    }
}
