@extends('admin.layout.appadmin')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>Pesanan</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pelanggan</th>
                                            <th scope="col">Tanggal Pembelian</th>
                                            <th scope="col">Keterangan Barang</th>
                                            <th scope="col">Total Pembelian</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach($pesanan as $f)
                                        <tr> 
                                            <td scope="col">{{ $no }}</td>
                                            <td scope="col">{{ $f->nama_pelanggan }}</td>
                                            <td scope="col">{{ $f->tanggal }}</td>
                                            <td scope="col">{{ $f->keterangan }}</td>
                                            <td scope="col">{{ $f->total }}</td>
                                            <td>
                                                <a href="{{ route('pesanan.edit',['id' => $f->id]) }}" class="badge badge-warning">Edit</a>
                                                {{-- <a href="" class="btn btn-success">View</a> --}}
                                                <a href="{{route('pesanan.destroy',['id' => $f->id]) }}" class="badge badge-danger">Hapus</a>
                                            </td> 
                                        </tr>                     
                                        @php $no++ @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="{{ route('pesanan.create')}}" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection