@extends('layout.template')

@section('konten')
<div class="text-center">
    <h1>Edit Klinik</h1>
</div>
<!-- START FORM -->
<form action="{{ route('update.clinic', ['id' => $clinic->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('admin/maps') }}" class="btn btn-secondary">Back</a>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama" value="{{ $clinic->nama }}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat' id="alamat" value="{{ $clinic->alamat }}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">URL Foto Klinik</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='foto' id="foto" value="{{ $clinic->foto }}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nomortelp" class="col-sm-2 col-form-label">Nomor Telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nomor_telepon' id="nomortelp" value="{{ $clinic->nomor_telepon }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jam_buka" class="col-sm-2 col-form-label">Jam Buka</label>
            <div class="col-sm-10">
                <input type="time" class="form-control" name='jam_buka' id="jam_buka" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="link_alamat" class="col-sm-2 col-form-label">Link Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='link_alamat' id="link_alamat" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">Update Klinik</button>
            </div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection
