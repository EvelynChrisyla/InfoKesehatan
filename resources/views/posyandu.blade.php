<head>
    <title>Form Monitoring Posyandu</title>
</head>
@extends('layout.template')

@section('konten')
<div class="text-center">
    <h1>Form Data Posyandu</h1>
</div>
<!-- START FORM -->

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


<form action="{{ route('store.posyandu') }}" method="POST">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('puskesmasadmin') }}" class="btn btn-secondary">Back</a>
        <div class="mb-3 row">
            <label for="laki-laki" class="col-sm-2 col-form-label">Jumlah Bayi Laki-Laki</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='laki_laki' id="laki-laki" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="perempuan" class="col-sm-2 col-form-label">Jumlah Bayi Perempuan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='perempuan' id="perempuan" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="stunting" class="col-sm-2 col-form-label">Jumlah Bayi Stunting</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='stunting' id="stunting" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="normal" class="col-sm-2 col-form-label">Jumlah Bayi Normal</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='normal' id="normal" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">Simpan Data Posyandu</button>
            </div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection
