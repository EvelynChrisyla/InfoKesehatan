@extends('layout.template')

@section('konten')
<div class="text-center">
    <h1>Form Data Ibu Hamil</h1>
</div>
<!-- START FORM -->

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


<form action="{{ route('store.hamil') }}" method="POST">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('hamiladmin') }}" class="btn btn-secondary">Back</a>
        <div class="mb-3 row">
            <label for="totalhamil" class="col-sm-2 col-form-label">Jumlah Ibu Hamil</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='totalhamil' id="totalhamil" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="keguguran" class="col-sm-2 col-form-label">Jumlah Ibu Keguguran</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='keguguran' id="keguguran" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="melahirkan" class="col-sm-2 col-form-label">Jumlah Ibu Melahirkan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='melahirkan' id="melahirkan" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">Simpan Data Hamil</button>
            </div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection
