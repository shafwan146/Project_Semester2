@extends('admin.layout.appadmin')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>Pelanggan</h5></div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">No</th>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Tempat Lahir</th>
                                            <th scope="col">Tanggal Lahir</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Kartu</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach($pelanggan as $p)
                                        <tr> 
                                            <td scope="col">{{ $no }}</td>
                                            <td scope="col">{{ $p->kode }}</td>
                                            <td scope="col">{{ $p->nama }}</td>
                                            <td scope="col">{{ $p->jk }}</td>
                                            <td scope="col">{{ $p->tempat_lahir }}</td>
                                            <td scope="col">{{ $p->tanggal_lahir}}</td>
                                            <td scope="col">{{ $p->email }}</td>
                                            <td scope="col">{{ $p->kartu_id}}</td>
                                            <td>
                                                <a href="{{ route('pelanggan.edit',['id' => $p->id]) }}" class="badge badge-warning">Edit</a>
                                                {{-- <a href="" class="badge badge-info">View</a> --}}
                                                <a href="{{route('pelanggan.destroy',['id' => $p->id]) }}"class="badge badge-danger">Hapus</a>
                                            </td> 
                                        </tr>                     
                                        @php $no++ @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="{{ url('admin/pelanggan/create') }}" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection