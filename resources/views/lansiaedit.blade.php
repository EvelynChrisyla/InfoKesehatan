@extends('layout.template')

@section('konten')
    <div class="text-center">
        <h1>Edit Data Lansia</h1>
    </div>

    <!-- Form to edit Lansia data -->
    <form action="{{ route('update.lansia', $lansia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('puskesmasadmin') }}" class="btn btn-secondary">Back</a>
            <div class="mb-3 row">
                <label for="pria" class="col-sm-2 col-form-label">Jumlah Lansia Pria</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='pria' id="pria" value="{{ $lansia->pria }}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="wanita" class="col-sm-2 col-form-label">Jumlah Lansia Wanita</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='wanita' id="wanita" value="{{ $lansia->wanita}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="total" class="col-sm-2 col-form-label">Total Lansia</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='total' id="total" value="{{ $lansia->total}}" required>
                </div>
            </div>
            <!-- Repeat the same structure for other fields -->
            <!-- ... -->
            <div class="mb-3 row">
                <label for="submit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Update Data Lansia</button>
                </div>
            </div>
        </div>
    </form>
@endsection
