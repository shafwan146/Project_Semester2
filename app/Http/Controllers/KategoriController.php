<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori=KategoriProduk::all();

        return view('admin.kategori.kategori', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new KategoriProduk();
        $data ->nama = $request -> nama;

        $data->save();
        return redirect()->route('kategori')->with('success','kategori berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = KategoriProduk::find($id);
        
        return view('admin.kategori.edit',[
         'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        KategoriProduk::where('id',$id) -> update ([
            'nama' => $request->nama,
        ]);

        return redirect()->route('kategori')->with('success','kategori berhasil di update'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        KategoriProduk::destroy($id);

        return redirect()->route('kategori');
    }
}
