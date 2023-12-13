<head>
    <title>Edit Monitoring Ibu Hamil</title>
</head>
@extends('layout.template')

@section('konten')
    <div class="text-center">
        <h1>Edit Data Posyandu</h1>
    </div>

    <!-- Form to edit Posyandu data -->
    <form action="{{ route('update.posyandu', $posyandu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('puskesmasadmin') }}" class="btn btn-secondary">Back</a>
            <div class="mb-3 row">
                <label for="laki-laki" class="col-sm-2 col-form-label">Jumlah Bayi Laki-Laki</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='laki_laki' id="laki-laki" value="{{ $posyandu->laki_laki }}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="perempuan" class="col-sm-2 col-form-label">Jumlah Bayi Perempuan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='perempuan' id="perempuan" value="{{ $posyandu->perempuan}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="stunting" class="col-sm-2 col-form-label">Jumlah Bayi Stunting</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='stunting' id="stunting" value="{{ $posyandu->stunting}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="normal" class="col-sm-2 col-form-label">Jumlah Bayi Normal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='normal' id="normal" value="{{ $posyandu->normal}}" required>
                </div>
            </div>
            <!-- Repeat the same structure for other fields -->
            <!-- ... -->
            <div class="mb-3 row">
                <label for="submit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Update Data Posyandu</button>
                </div>
            </div>
        </div>
    </form>
@endsection
