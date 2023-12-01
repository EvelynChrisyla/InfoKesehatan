<!-- resources/views/jadwal_masyarakat.blade.php -->
@extends('layout.template')

@section('konten')

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h2 class="pb-2 border-bottom">Jadwal Dokter</h2>

    <div>
        <a href="{{ url('/homepage') }}" class="btn btn-primary">Home</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-2">Nama</th>
                <th class="col-md-2">Jam</th>
                <th class="col-md-3">Alamat</th>
                <th class="col-md-2">Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->jam}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->nomortelp}}</td>
            </tr>
            <?php $i++ ?>
            @endforeach
        </tbody>
    </table>
    {{ $data->withQueryString()->links()}}
</div>

@endsection
