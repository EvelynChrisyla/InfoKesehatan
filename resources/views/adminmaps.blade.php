@extends('layout.template')

@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="pb-3">
        <form class="d-flex" action="{{ route('admin.maps') }}" method="GET">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Search</button>
        </form>
    </div>

    <div class="pb-3">
        <a href='{{ url('createclinic') }}' class="btn btn-primary">+ Add Data</a>
        <a href='{{ url('/') }}' class="btn btn-secondary">Home</a>
    </div>

    <h1>Daftar Klinik</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-2">Nama Klinik</th>
                <th class="col-md-2">Alamat</th>
                <th class="col-md-2">Nomor Telepon</th>
                <th class="col-md-3">Foto</th>
                <th class="col-md-2">Jam Buka</th>
                <th class="col-md-2">Link</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clinics as $index => $clinic)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $clinic->nama }}</td>
                <td>{{ $clinic->alamat }}</td>
                <td>{{ $clinic->nomor_telepon }}</td>
                <td>{{ $clinic->foto }}</td>
                <td>{{ $clinic->jam_buka }}</td>
                <td>{{ $clinic->link_alamat}}</td>
                
                <td>
                    <a href="{{ route('edit.clinic', ['id' => $clinic->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('delete.clinic', ['id' => $clinic->id]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?')" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
