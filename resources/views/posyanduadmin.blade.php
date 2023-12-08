@extends('layout.template')

@section('konten')
    <div class="text-center">
        <h1>Data Posyandu</h1>
        <a href="{{ url('adminhomepage') }}" class="btn btn-secondary mb-3">Back to Admin Home</a>
        <a href="{{ route('create.posyandu') }}" class="btn btn-primary mb-3">+ Add Data</a>
    </div>

    <!-- Table to display Posyandu data -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Jumlah Bayi Laki-Laki</th>
                    <th>Jumlah Bayi Perempuan</th>
                    <th>Jumlah Bayi Stunting</th>
                    <th>Jumlah Bayi Normal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posyanduData as $data)
                    <tr>
                        <td>{{ $data->laki_laki }}</td>
                        <td>{{ $data->perempuan }}</td>
                        <td>{{ $data->stunting }}</td>
                        <td>{{ $data->normal }}</td>
                        <td>
                            <a href="{{ route('edit.posyandu', $data->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('delete.posyandu', $data->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
