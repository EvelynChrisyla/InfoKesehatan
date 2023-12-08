<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Tulis meta tags, CSS, dan judul -->
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Data Klinik</h1>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Nomor Telepon</th>
                        <th>Jam Buka</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clinics as $clinic)
                    <tr>
                        <td>{{ $clinic->nama }}</td>
                        <td>{{ $clinic->alamat }}</td>
                        <td>{{ $clinic->foto }}</td>
                        <td>{{ $clinic->nomor_telepon }}</td>
                        <td>{{ $clinic->jam_buka }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-center">
            <a href="{{ url('admin-maps') }}" class="btn btn-primary">Tambah Klinik</a>
        </div>
    </div>
</body>
</html>
