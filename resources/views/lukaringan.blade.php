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
    <nav class="navbar navbar-expand-lg" >
        <div class="container-fluid">
            <img class="logo m-0" src="/img/logoasset.png" alt="" onclick="window.location.href='/'">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse container-fluid " id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0  mx-auto ">
                    <li class="nav-item text-center">
                        <a class="nav-link active fw-bold" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ url('/about') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
      
    <div class="container-fluid container-lg overflow-hidden   ">
        <div class="container-fluid container-lg overflow-hidden " style="padding-bottom: 9rem">
            <div class="row align-items-center mt-5">
                <div class="col-lg-7 col-12 order-lg-1 order-0"> <!-- Tambahkan kelas col-lg-7 di sini -->
                    <img style="width: 100%; min-width: 40%;" src="{{ asset('img/Lukaringan/CideraAsset1.png') }}" alt="">
                </div>
                <div class="col-lg-5  order-lg-0 order-1 mt-lg-0 mt-3 text-center text-lg-start">
                    <!-- Tambahkan kelas col-lg-5 di sini -->
                    <div class="animationTeks1 " id="">
                        <section class="about-section" id="">
                            <h1>
                                <span class="black fonts-bold">Seputar</span><br>
                                <span class="red fonts-bold">Luka Ringan</span><br>
                                <span class="black fonts-bold">dan Cara Mengobatinya</span>
                            </h1>
                        </section>

                        <p class="text-center text-lg-start fs-5">
                        Luka ringan dapat terjadi ketika terjadi robekan pada permukaan kulit. Walaupun luka ringan adalah penyakit yang tidak serius, terbukanya kulit dapat menyebabkan infeksi yang disebabkan oleh bakteri yang masuk kedalamnya.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="info-section rounded-4">
        <!-- Isi untuk bagian Info -->
        <div class="container " style = "transform: translateY(-6rem); ">
            <div class="card-group gap-5 ">
                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px; background-color: #E9C46A ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection.png" style="width:50px;">
                            Luka ringan sering kali diabaikan, tetapi sebenarnya bisa menjadi sumber masalah serius jika tidak diobati dengan benar
                    </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #E9C46A ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection1.png" style="width:50px;">
                            Menurut CDC, luka ringan yang diabaikan dapat meningkatkan risiko infeksi dan komplikasi, terutama pada usia 20-30 tahun.
                    </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #E9C46A ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logo3.png" style="width:50px;">
                            Umumnya, luka ringan tidak memerlukan penanganan serius sehingga dapat di tolong dengan pertolongan pertama saja
                    </div>
                </div>
            </div>
        </div>

        <div class="container rounded-top-5" style="">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col d-flex justify-content-center align-items-center m-0 ">
                    <img src="/img/Lukaringan/asset1.png" class="cidera1 m-0 h-75 w-75  " style="float:left">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <p class="fonts-bold fs-4 fw-bolder">Macam - Macam Luka Ringan:</p>
                    <ul class="cideralist1 m-0 ">
                        <li>Luka Lecet</li>
                        <li>Luka Sayat </li>
                        <li>Luka Robe</li>
                        <li>Luka Bakar</li>
                        <li>Luka Tusuk</li>
                        <li>Luka Bedah </li>
                        
                    </ul>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col d-flex justify-content-center  align-items-center m-0">
                    <img src="/img/Lukaringan/asset2.png" class="cidera1 m-0 h-75 w-75  " style="float:left">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <p class="fonts-bold fs-4 fw-bolder m-0">Tahapan Pertolongan Pertama Apabila Mengalami Luka Ringan:</p>
                    <ul class="cideralist1 m-0 py-3">
                        <li>Cuci tangan  untuk mencegahi infeksi.</li>
                        <li>Bersihkan luka menggunakan air yang mengalir.</li>
                        <li>Keringkan Luka.</li>
                        <li>Tutup luka dengan kassa steril, gunakan plester untuk merekatkan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

{{-- kanan menggunakan revers --}}
    <div class="container rounded-top-5 " style="">
        <div class="row row-cols-1 row-cols-md-2 g-4 flex-row-reverse">
            <div class="col d-flex align-items-center justify-content-center">
                <img src="/img/Lukaringan/lukaringanbawah.png" class="cidera1 m-0 h-75 w-75">
            </div>
            <div class="col d-flex flex-column  justify-content-center">
                <p class="fonts-bold fs-4 fw-bolder m-0">Obat untuk Mengatasi Luka Ringan:</p>
                <ul class="cideralist1   text-left m-0 py-3 ">
                        <li>Povidone Iodine (Betadine)</li>
                        <li>Cedexomer Iodine (Iodosrb)</li>
                        <li>Bacitracin</li>
                        <li>Neosporin</li>
                        <li>Silver Sulfadiazine</li>   
                </ul>
            </div>
        </div>
        
    </div>

    @include('alamat-rumahsakit')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
