@extends('layout.template')

@section('konten')

<div class="text-center">
    <h1>Form Jadwal Dokter</h1>
</div>
<!-- START FORM -->
<form action='{{ url('jadwaldokter')}}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{url('jadwaldokter')}}" class="btn btn-secondary">Back</a>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{Session::get('nama')}}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jam" class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-10">
                <input type="time" class="form-control" name="jam" value="{{ Session::get('jam') }}" id="jam" step="60">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal" value="{{ Session::get('tanggal') }}" id="tanggal">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat' value="{{Session::get('alamat')}}" id="alamat">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nomortelp" class="col-sm-2 col-form-label">Nomor Telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nomortelp' value="{{Session::get('nomortelp')}}" id="nomortelp">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nomortelp" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection
