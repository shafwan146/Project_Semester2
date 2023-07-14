@extends('admin.layout.appadmin')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>Pesanan Baru</h5></div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">TTL</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Barang</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach($pesan as $p)
                                        <tr> 
                                            <td scope="col">{{ $no }}</td>
                                            <td scope="col">{{ $p->nama }}</td>
                                            <td scope="col">{{ $p->ttl }}</td>
                                            <td scope="col">{{ $p->email }}</td>
                                            <td scope="col">{{ $p->barang }}</td>
                                            <td scope="col">{{ $p->jumlah }}</td>
                                            <td>
                                                <a href="{{ route('order.edit',['id' => $p->id]) }}" class="badge badge-warning">Edit</a>
                                                {{-- <a href="" class="badge badge-info">View</a> --}}
                                                <a href="{{route('order.destroy',['id' => $p->id]) }}"class="badge badge-danger">Hapus</a>
                                            </td> 
                                        </tr>                     
                                        @php $no++ @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="{{ url('admin/order/create') }}" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection