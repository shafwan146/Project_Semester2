<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $produk = DB::table('produk')->
        // join('jenis_produk', 'produk.jenis_produk_id', '=', 'jenis_produk.id')->select('produk.*', 'jenis_produk.nama as kategori')->get();

        $produk = Produk::with('kategoriProduk')->get();
        
        return view('admin.produk.produk', compact('produk') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = KategoriProduk::all();
        
        return view('admin.produk.create',compact('kategori')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Produk;
        $data ->kode = $request -> kode;
        $data ->nama = $request -> nama;
        $data ->harga_jual = $request -> harga_jual;
        $data ->harga_beli = $request -> harga_beli;
        $data ->stok = $request -> stok;
        $data ->min_stok = $request -> min_stok;
        $data ->jenis_produk_id = $request -> jenis_produk_id;

        $data->save();
        return redirect()->route('produk')->with('success','Produk berhasil ditambah');
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
       $kategori = KategoriProduk::all();
       $data = Produk::with('kategoriProduk')->find($id);
       
       return view('admin.produk.edit',[
        'kategori' => $kategori,
        'data' => $data,
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Produk::where('id',$id) -> update ([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'stok' => $request->stok,
            'min_stok' => $request->min_stok,
            'jenis_produk_id' => $request -> jenis_produk_id,
        ]);

        return redirect()->route('produk')->with('success','produk berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produk::destroy($id);

        return redirect()->route('produk');
    }
}
