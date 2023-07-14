<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Peran;
use App\Models\Pelanggan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = DB::table('pesanan')->join('pelanggan', 'pesanan.id_pelanggan', '=', 'pelanggan.id')->select('pesanan.*', 'pelanggan.nama as nama_pelanggan')->get();
        
        return view('admin.pesanan.pesanan', compact('pesanan'));
        
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pesanan = Pesanan::all();
        $pelanggan = Pelanggan::all();

        return view('admin.pesanan.create', ['pesanan' => $pesanan, 'pelanggan' => $pelanggan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Pesanan;
        $data ->id_pelanggan = $request -> id_pelanggan;
        $data ->tanggal = $request -> tanggal;
        $data ->keterangan = $request -> keterangan;
        $data ->total = $request -> total;

        $data->save();
        return redirect()->route('pesanan')->with('success','Pesanan berhasil ditambah');
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
        $pesanan = Pelanggan::all();
        $data = Pesanan::with('pelanggan')->find($id);
       
       return view('admin.pesanan.edit',[
        'pesanan' => $pesanan,
        'data' => $data,
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Pesanan::where('id',$id) -> update ([
            'id_pelanggan' => $request->id_pelanggan,
            'tanggal' => $request->tanggal,
            'total' => $request->total,
        ]);

        return redirect()->route('pesanan')->with('success','pesanan berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pesanan::destroy($id);

        return redirect()->route('pesanan');
    }
}
