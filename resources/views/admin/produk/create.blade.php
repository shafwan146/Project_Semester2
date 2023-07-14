@extends('admin.layout.appadmin')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"></h1>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Produk</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ url('admin/produk/store') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="kode" class="col-4 col-form-label">Kode</label>
                                        <div class="col-8">
                                            <input id="kode" name="kode" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                                        <div class="col-8">
                                            <input id="harga_jual" name="harga_jual" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                                        <div class="col-8">
                                            <input id="harga_beli" name="harga_beli" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="stok" class="col-4 col-form-label">Stok</label>
                                        <div class="col-8">
                                            <input id="stok" name="stok" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="min_stok" class="col-4 col-form-label">Min Stok</label>
                                        <div class="col-8">
                                            <input id="min_stok" name="min_stok" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jenis_produk_id" class="col-4 col-form-label">Jenis Produk</label>
                                        <div class="col-8">
                                            <select class="form-select" name="jenis_produk_id">
                                                @foreach($kategori as $d)
                                                <option value="{{ $d->id }}">{{ $d->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group-row">
                                        <button type="submit" class="btn btn-primary"> Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>
@endsection