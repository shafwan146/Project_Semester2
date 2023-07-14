<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Peran;
use App\Models\Kartu;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = DB::table('pelanggan')->join('kartu', 'pelanggan.kartu_id', '=', 'kartu.id')->select('pelanggan.*', 'kartu.nama as nama_kartu')->get();
        
        return view('admin.pelanggan.pelanggan', compact('pelanggan') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $kartu = Kartu::all();

        return view('admin.pelanggan.create', ['pelanggan' => $pelanggan, 'kartu' => $kartu]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Pelanggan;
        $data ->kode = $request -> kode;
        $data ->nama = $request -> nama;
        $data ->jk = $request -> jk;
        $data ->tempat_lahir = $request -> tempat_lahir;
        $data ->tanggal_lahir = $request -> tanggal_lahir;
        $data ->email = $request -> email;
        $data ->kartu_id = $request -> kartu_id;

        $data->save();
        return redirect()->route('pelanggan')->with('success','Pelanggan berhasil ditambah');   
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
        $pelanggan = Pelanggan::all();
        $kartu = Kartu::all();  
        $data = Pelanggan::with('kartu')->find($id);
        
        return view('admin.pelanggan.edit',[
         'pelanggan' => $pelanggan,
         'kartu' => $kartu,
         'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Pelanggan::where('id',$id) -> update ([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
            'kartu_id' => $request->kartu_id,
        ]);

        return redirect()->route('pelanggan')->with('success','pelanggan berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pelanggan::destroy($id);

        return redirect()->route('pelanggan');
    }
}
