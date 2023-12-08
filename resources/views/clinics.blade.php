@extends('layout.template')

@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- TOMBOL TAMBAH DATA DAN KEMBALI KE HALAMAN ADMIN MAPS -->
    <div class="pb-3">
        <a href="{{ route('admin.maps') }}" class="btn btn-secondary">Back</a>
        <a href="{{ route('store.clinic') }}" class="btn btn-primary">+ Add Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-2">Nama Klinik</th>
                <!-- Sesuaikan dengan kolom-kolom lain yang ingin ditampilkan -->
                <th class="col-md-2">Alamat</th>
                <th class="col-md-2">Nomor Telepon</th>
                <th class="col-md-3">Foto</th>
                <th class="col-md-2">Jam Buka</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($clinics as $clinic)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $clinic->nama }}</td>
                <!-- Tampilkan data sesuai kebutuhan -->
                <td>{{ $clinic->alamat }}</td>
                <td>{{ $clinic->nomor_telepon }}</td>
                <td>{{ $clinic->foto }}</td>
                <td>{{ $clinic->jam_buka }}</td>
                <td>
                    <!-- Tambahkan tombol edit dan delete sesuai kebutuhan -->
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
