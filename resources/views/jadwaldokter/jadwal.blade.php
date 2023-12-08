<head>
<title>Jadwal Dokter</title>
</head>
@extends('layout.template')

@section('konten')

<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{url('jadwaldokter')}}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Search</button>
        </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA DAN KEMBALI KE HOMEPAGE -->
    <div class="pb-3">
        <a href='{{ url('jadwaldokter/create') }}' class="btn btn-primary">+ Add Data</a>
        <a href='{{ url('/adminhomepage') }}' class="btn btn-secondary">Home</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-2">Nama</th>
                <th class="col-md-2">Jam</th>
                <th class="col-md-2">Tanggal</th>
                <th class="col-md-3">Alamat</th>
                <th class="col-md-2">Nomor Telepon</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->jam}}</td>
                <td>{{ $item->tanggal}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->nomortelp}}</td>
                <td>
                    <a href='{{url('jadwaldokter/'.$item->nama.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Are you sure you want to delete the data?')" class='d-inline' action="{{ url('jadwaldokter/'.$item->nama)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
            
        </tbody>
    </table>
    {{ $data->withQueryString()->links()}}
</div>
<!-- AKHIR DATA -->  
@endsection
