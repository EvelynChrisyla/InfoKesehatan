<head>
    <title>Edit Monitoring Ibu Hamil</title>
</head>
@extends('layout.template')

@section('konten')
    <div class="text-center">
        <h1>Edit Data Klinik</h1>
    </div>

    <!-- Form to edit Klinik data -->
    <form action="{{ route('update.klinik', $klinik->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('puskesmasadmin') }}" class="btn btn-secondary">Back</a>
            <div class="mb-3 row">
                <label for="diabetes" class="col-sm-2 col-form-label">Jumlah Penderita Diabetes</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='diabetes' id="diabetes" value="{{ $klinik->diabetes }}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dbd" class="col-sm-2 col-form-label">Jumlah Penderita DBD</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='dbd' id="dbd" value="{{ $klinik->dbd}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="covid" class="col-sm-2 col-form-label">Jumlah Penderita Covid-19</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='covid' id="covid" value="{{ $klinik->covid}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tbc" class="col-sm-2 col-form-label">Jumlah Penderita TBC</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='tbc' id="tbc" value="{{ $klinik->tbc}}" required>
                </div>
            </div>
            <!-- Repeat the same structure for other fields -->
            <!-- ... -->
            <div class="mb-3 row">
                <label for="submit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Update Data Klinik</button>
                </div>
            </div>
        </div>
    </form>
@endsection
