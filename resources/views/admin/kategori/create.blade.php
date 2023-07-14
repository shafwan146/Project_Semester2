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
                                <form method="POST" action="{{ route('kategori.store') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="kode" class="col-4 col-form-label">nama</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" type="text" class="form-control">
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