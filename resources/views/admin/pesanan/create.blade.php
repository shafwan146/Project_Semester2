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
                                <h5>Pesanan</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ url('admin/pesanan/store') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="id_pelanggan" class="col-4 col-form-label">Pelanggan</label>
                                        <div class="col-8">
                                            <select class="form-select" name="id_pelanggan">
                                                @foreach($pelanggan as $f)
                                                <option value="{{ $f->id }}">{{ $f->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-4 col-form-label">Tanggal Pembelian</label>
                                        <div class="col-8">
                                            <input id="tanggal" name="tanggal" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-4 col-form-label">Keterangan Barang</label>
                                        <div class="col-8">
                                            <input id="keterangan" name="keterangan" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="total" class="col-4 col-form-label">Total Pembelian</label>
                                        <div class="col-8">
                                            <input id="total" name="total" type="text" class="form-control">
                                        </div>
                                    </div>  
                                    <div class="form-group-row mt-4">
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