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
                                <form method="POST" action="{{ route('pesanan.update',['id' => $data -> id])}}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="id_pelanggan" class="col-4 col-form-label">Pelanggan</label>
                                        <div class="col-8">
                                            <input id="id_pelanggan" name="id_pelanggan" type="text" class="form-control"
                                            value="{{ $data->id_pelanggan}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                        <div class="col-8">
                                            <input id="tanggal" name="tanggal" type="text" class="form-control"
                                            value="{{ $data->tanggal}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="total" class="col-4 col-form-label">Total</label>
                                        <div class="col-8">
                                            <input id="total" name="total" type="text" class="form-control"
                                            value="{{ $data->total}}">
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