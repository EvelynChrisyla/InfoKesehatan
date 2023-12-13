<head>
    <title>Ibu Hamil</title>
</head>
@extends('layout.template')

@section('konten')
    <div class="text-center">
        <h1>Data Ibu Hamil</h1>
        <a href="{{ url('adminhomepage') }}" class="btn btn-secondary mb-3">Back to Admin Home</a>
        <a href="{{ route('create.hamil') }}" class="btn btn-primary mb-3">+ Add Data</a>
    </div>

    <!-- Table to display hamil data -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Jumlah Ibu Hamil</th>
                    <th>Jumlah Ibu Keguguran</th>
                    <th>Jumlah Ibu Melahirkan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hamilData as $data)
                    <tr>
                        <td>{{ $data->totalhamil }}</td>
                        <td>{{ $data->keguguran}}</td>
                        <td>{{ $data->melahirkan }}</td>
                        <td>
                            <a href="{{ route('edit.hamil', $data->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('delete.hamil', $data->id) }}" method="POST" style="display: inline;">
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
