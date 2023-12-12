@extends('layout.template')

@section('konten')
<div class="text-center">
    <h1>Form Data Lansia</h1>
</div>
<!-- START FORM -->

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


<form action="{{ route('store.lansia') }}" method="POST">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('lansiaadmin') }}" class="btn btn-secondary">Back</a>
        <div class="mb-3 row">
            <label for="pria-pria" class="col-sm-2 col-form-label">Jumlah Lansia Pria</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pria' id="pria-pria" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="wanita" class="col-sm-2 col-form-label">Jumlah Lansia Wanita</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='wanita' id="wanita" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="lansia" class="col-sm-2 col-form-label">Total Lansia</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='total' id="total" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">Simpan Data Lansia</button>
            </div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection
