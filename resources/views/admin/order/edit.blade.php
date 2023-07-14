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
                                <form method="POST" action="{{ route('order.update',['id' => $data -> id])}}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" type="text" class="form-control"
                                            value = "{{ $data->nama }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ttl" class="col-4 col-form-label">TTL</label>
                                        <div class="col-8">
                                            <input id="ttl" name="ttl" type="text" class="form-control"
                                            value = "{{ $data->ttl }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email</label>
                                        <div class="col-8">
                                            <input id="email" name="email" type="text" class="form-control"
                                            value = "{{ $data->email }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="barang" class="col-4 col-form-label">Barang</label>
                                        <div class="col-8">
                                            <input id="barang" name="barang" type="text" class="form-control"
                                            value = "{{ $data->barang }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                                        <div class="col-8">
                                            <input id="jumlah" name="jumlah" type="text" class="form-control"
                                            value = "{{ $data->jumlah }}">
                                        </div>
                                    </div>

                                    <input type="hidden" value="{{ $data->id }}"name="id">

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