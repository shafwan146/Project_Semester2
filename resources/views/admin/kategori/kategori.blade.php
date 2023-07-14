@extends('admin.layout.appadmin')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>Kategori</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach($kategori as $k)
                                        <tr> 
                                            <td scope="col">{{ $no }}</td>
                                            <td scope="col">{{ $k->nama }}</td>
                                            <td>
                                                <a href="{{route('kategori.edit',['id' => $k->id]) }}" class="badge badge-warning">Edit</a>
                                                {{-- <a href="" class="btn btn-success">View</a> --}}
                                                <a href="{{route('kategori.destroy',['id' => $k->id]) }}" class="badge badge-danger">Hapus</a>
                                            </td> 
                                        </tr>                     
                                        @php $no++ @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="{{ route('kategori.create')}}" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection