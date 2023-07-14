@extends('admin.layout.appadmin')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>Produk</h5></div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">No</th>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Harga Beli</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Minimal Stok</th>
                                            <th scope="col">Kategori Produk</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach($produk as $p)
                                        <tr> 
                                            <td scope="col">{{ $no }}</td>
                                            <td scope="col">{{ $p->kode }}</td>
                                            <td scope="col">{{ $p->nama }}</td>
                                            <td scope="col">{{ $p->harga_jual }}</td>
                                            <td scope="col">{{ $p->harga_beli }}</td>
                                            <td scope="col">{{ $p->stok }}</td>
                                            <td scope="col">{{ $p->min_stok }}</td>
                                            <td scope="col">{{ $p->kategoriProduk->nama}}</td>
                                            <td>
                                                <a href="{{ route('produk.edit',['id' => $p->id]) }}" class="badge badge-warning">Edit</a>
                                                {{-- <a href="" class="badge badge-info">View</a> --}}
                                                <a href="{{route('produk.destroy',['id' => $p->id]) }}"class="badge badge-danger">Hapus</a>
                                            </td> 
                                        </tr>                     
                                        @php $no++ @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="{{ url('admin/produk/create') }}" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection