<?php

namespace App\Http\Controllers;

use App\Models\produkbengkel;
use Illuminate\Http\Request;

class ProdukbengkelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = produkbengkel::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|min:3',
            'jenis' => 'required|max:255',
            'stok' => 'required',
        ]);
        produkbengkel::create($validate);
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(produkbengkel $produkbengkel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produkbengkel $produkbengkel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produkbengkel $produkbengkel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produkbengkel $produkbengkel)
    {
        //
    }
}
