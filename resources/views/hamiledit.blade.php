<head>
    <title>Edit Monitoring Ibu Hamil</title>
</head>
@extends('layout.template')

@section('konten')
    <div class="text-center">
        <h1>Edit Data Ibu Hamil</h1>
    </div>

    <!-- Form to edit Posyandu data -->
    <form action="{{ route('update.hamil', $hamil->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('hamiladmin') }}" class="btn btn-secondary">Back</a>
            <div class="mb-3 row">
                <label for="totalhamil" class="col-sm-2 col-form-label">Jumlah Ibu Hamil</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='totalhamil' id="totalhamil" value="{{ $hamil->totalhamil }}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="keguguran" class="col-sm-2 col-form-label">Jumlah Ibu Keguguran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='keguguran' id="keguguran" value="{{ $hamil->keguguran}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="melahirkan" class="col-sm-2 col-form-label">Jumlah Ibu Melahirkan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='melahirkan' id="melahirkan" value="{{ $hamil->melahirkan}}" required>
                </div>
            </div>
            <!-- Repeat the same structure for other fields -->
            <!-- ... -->
            <div class="mb-3 row">
                <label for="submit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Update Data Ibu Hamil</button>
                </div>
            </div>
        </div>
    </form>
@endsection
