@extends('toko.app')

@section('content')
    <body>
        <div class="container px-5" id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-5">
                    <h1 class="mt-2 mb-4 text-white text-center">~You Buy You Do Charity~</h1>
                    <div class="row">
                        <div class="col-md-12 px-5">
                            <div class="card bg-black mb-0">
                                <div class="card-header text-light bg-danger">
                                    <h5>Pesanan Baru</h5>
                                </div>
                                <div class="card-body bg-dark mb-5">
                                    <form method="POST" action="{{ url('order/store') }}">
                                        @csrf
                                        <div class="form-group row mb-3">
                                            <label for="nama" class="col-1 fw-bold col-form-label text-light">Nama</label>
                                            <div class="col-11">
                                                <input id="nama" name="nama" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="ttl" class="col-1 fw-bold col-form-label text-light">T T L</label>
                                            <div class="col-11">
                                                <input id="ttl" name="ttl" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="email" class="col-1 fw-bold col-form-label text-light">Email</label>
                                            <div class="col-11">
                                                <input id="email" name="email" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="barang" class="col-1 fw-bold col-form-label text-light">Barang</label>
                                            <div class="col-11">
                                                <input id="barang" name="barang" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jumlah" class="col-1 fw-bold col-form-label text-light">Jumlah</label>
                                            <div class="col-11">
                                                <input id="jumlah" name="jumlah" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn fw-bold btn-secondary mt-4"> Submit</button>
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
    </body>
@endsection
