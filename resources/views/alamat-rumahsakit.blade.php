<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: "PlusJakartaSans-bold";
            src: {{ asset('fonts/PlusJakartaSans-Bold.ttf') }}
            
        }
        .fonts-bold {
            font-family: 'PlusJakartaSans-bold';

        }
        @font-face {
            font-family: "PlusJakartaSans-Medium";
            src: {{ asset('fonts/PlusJakartaSans-Medium.ttf') }}
            
        }
        .fonts-medium {
            font-family: 'PlusJakartaSans-Medium';

        }
    </style>
    <link rel="stylesheet" href="Page_Style.css">
    <title>Solusi Penolongan Pertama</title>
    {{-- <link rel="stylesheet" href="homepageStyle.css"> --}}
</head>
<body>
<section class="information-section " id="">
        <p class="fw-bolder fs-2 fonts-bold">Alamat Klinik atau Rumah Sakit</p>
        <div class="card-container card-group gap-5 container-fluid   ">
            <div class="card rounded-4">
                <b>Rumah Sakit Umum Pusat (RSUP) Fatmawati</b>
                <img src="/img/fatmawati.png" alt="RS Sentosa">
                <div class="Hospital_detail">
                    <div><b>Alamat:</b> Jl. RS. Fatmawati Raya, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430 </div>
                    <div><b>Jam Buka:</b> Buka 24 jam</div>
                    <div><b>Provinsi:</b> Jakarta</div>
                    <div><b>Telepon:</b> 021-7660-552 </div>
                </div>
            </div>

            <div class="card rounded-4">
                <b>RSPAD Gatot Soebroto</b>
                <img src="/img/gatot.png" alt="RS Sentosa">
                <div class="Hospital_detail">
                    <div><b>Alamat:</b> Jl. Abdul Rahman Saleh Raya No.24, RT.10/RW.5, Senen, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10410 </div>
                    <div><b>Jam Buka:</b> Buka 24 jam</div>
                    <div><b>Provinsi:</b> Jakarta</div>
                    <div><b>Telepon:</b> 0811-9222-656 </div>
                </div>

            </div>

            <div class="card rounded-4">
                <b>Rumah Sakit Bhayangkara TK. I R. Said Sukanto</b>
                <img src="/img/said.png" alt="RS Sentosa">
                <div class="Hospital_detail">
                    <div><b>Alamat:</b> Jl. Raya Jakarta-Bogor RT.1/RW.5, Kramat Jati Kec. Kramat jati Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13510 </div>
                    <div><b>Jam Buka:</b> Buka 24 jam</div>
                    <div><b>Provinsi:</b> Jakarta</div>
                    <div><b>Telepon:</b> 021-809-3288 </div>
                </div>
            </div>
        </div>
    </section>

    <section class="caution-section d-flex ">
        <div class="caution py-3"> <p class="m-0 ">Peringatan jika Anda sedang mengalami penyakit yang mengganggu kesehatan, layanan ini tidak
            direkomendasikan untuk Anda. Silahkan menghubungi 119</p></div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>