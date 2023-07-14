<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\PesananBaru;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('toko.orderan');
    }

    public function table()
    {
        $pesan =Order::all();

        return view('admin.order.order', compact('pesan'));
    }

    public function create()
    {
        return view('admin.order.create');
    }
    public function store(Request $request)
    {
        $data = new Order;
        $data ->nama = $request -> nama;
        $data ->ttl = $request -> ttl;
        $data ->email = $request -> email;
        $data ->barang = $request -> barang;
        $data ->jumlah = $request -> jumlah;

        $data->save();
        return redirect()->route('order')->with('success','Orderan berhasil ditambah');
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
       $data = Order::find($id);
       
       return view('admin.order.edit',[
        'data' => $data,
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Order::where('id',$id) -> update ([
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'email' => $request->email,
            'barang' => $request->barang,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('order')->with('success','orderan berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::destroy($id);

        return redirect()->route('order');
    }

}
