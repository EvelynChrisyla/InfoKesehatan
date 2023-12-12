@extends('layout.template')

@section('konten')
<div class="text-center">
    <h1>Form Data Klinik</h1>
</div>
<!-- START FORM -->

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


<form action="{{ route('store.klinik') }}" method="POST">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('klinikadmin') }}" class="btn btn-secondary">Back</a>
        <div class="mb-3 row">
            <label for="diabetes-diabetes" class="col-sm-2 col-form-label">Jumlah Penderita Diabetes</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='diabetes' id="diabetes-diabetes" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dbd" class="col-sm-2 col-form-label">Jumlah Penderita DBD</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='dbd' id="dbd" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="covid" class="col-sm-2 col-form-label">Jumlah Penderita Covid-19</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='covid' id="covid" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tbc" class="col-sm-2 col-form-label">Jumlah Penderita tbc</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tbc' id="tbc" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">Simpan Data Klinik</button>
            </div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection
