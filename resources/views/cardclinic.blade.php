@extends('layout.template')

@section('konten')
<div class="container mt-4">
    <div class="row">
        @foreach ($clinics as $clinic)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $clinic->nama }}</h5>
                    <!-- Tampilkan foto dari Google Drive -->
                    <div class="text-center mb-3">
                        <img src="{{ $clinic->foto }}" class="img-fluid" style="max-height: 150px;" alt="Foto Klinik">
                    </div>
                    <div class="clinic-details">
                        <p><strong>Alamat:</strong> {{ $clinic->alamat }}</p>
                        <p><strong>Nomor Telepon:</strong> {{ $clinic->nomor_telepon }}</p>
                        <p><strong>Jam Buka:</strong> {{ $clinic->jam_buka }}</p>
                        <!-- tambahkan deskripsi lainnya sesuai kebutuhan -->
                        <div class="text-center">
                            <a href="{{ $clinic->link_alamat }}" target="_blank" class="btn btn-primary">Lihat di Google Maps</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
