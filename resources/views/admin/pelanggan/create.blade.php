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
                                <h5>Pelanggan</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ url('admin/pelanggan/store') }}">
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
                                        <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
                                        <div class="col-8">
                                            <input id="jk" name="jk" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tempat_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                                        <div class="col-8">
                                            <input id="tempat_lahir" name="tempat_lahir" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                                        <div class="col-8">
                                            <input id="tanggal_lahir" name="tanggal_lahir" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email</label>
                                        <div class="col-8">
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kartu_id" class="col-4 col-form-label">Kartu</label>
                                        <div class="col-8">
                                            <select class="form-select" name="kartu_id">
                                                @foreach($kartu as $f)
                                                <option value="{{ $f->id }}">{{ $f->nama}}</option>
                                                @endforeach
                                            </select>
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