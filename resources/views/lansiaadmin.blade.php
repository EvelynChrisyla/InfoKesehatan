@extends('layout.template')

@section('konten')
    <div class="text-center">
        <h1>Data lansia</h1>
        <a href="{{ url('adminhomepage') }}" class="btn btn-secondary mb-3">Back to Admin Home</a>
        <a href="{{ route('create.lansia') }}" class="btn btn-primary mb-3">+ Add Data</a>
    </div>

    <!-- Table to display lansia data -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Jumlah Lansia Pria</th>
                    <th>Jumlah Lansia Wanita</th>
                    <th>Total Lansia</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lansiaData as $data)
                    <tr>
                        <td>{{ $data->pria }}</td>
                        <td>{{ $data->wanita }}</td>
                        <td>{{ $data->total }}</td>
                        <td>
                            <a href="{{ route('edit.lansia', $data->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('delete.lansia', $data->id) }}" method="POST" style="display: inline;">
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
