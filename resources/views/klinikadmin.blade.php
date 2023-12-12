@extends('layout.template')

@section('konten')
    <div class="text-center">
        <h1>Data klinik</h1>
        <a href="{{ url('adminhomepage') }}" class="btn btn-secondary mb-3">Back to Admin Home</a>
        <a href="{{ route('create.klinik') }}" class="btn btn-primary mb-3">+ Add Data</a>
    </div>

    <!-- Table to display klinik data -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Jumlah Penderita Diabetes</th>
                    <th>Jumlah Penderita DBD</th>
                    <th>Jumlah Penderita Covid-19</th>
                    <th>Jumlah Penderita TBC</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($klinikData as $data)
                    <tr>
                        <td>{{ $data->diabetes }}</td>
                        <td>{{ $data->dbd }}</td>
                        <td>{{ $data->covid }}</td>
                        <td>{{ $data->tbc }}</td>
                        <td>
                            <a href="{{ route('edit.klinik', $data->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('delete.klinik', $data->id) }}" method="POST" style="display: inline;">
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
